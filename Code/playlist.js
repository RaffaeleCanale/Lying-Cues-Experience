var states = {
	LOADING_IMAGES: 0,
	WAITING_USER_TO_START: 1,
	SHOWING_DOTS: 2,
	SHOWING_FIXATION_CROSS: 3,
	WAITING_USER_TO_ANSWER: 4,
	WAITING_USER_TO_ANSWER_DOTS: 5,
	TAKING_BREAK: 6,
	TIMED_OUT: 7,
	ERROR_OCCURRED: 8	
};

var playlist; // Contains the list of tuples of the playlist. Each element of the list contains (id, subject, dots)

var counter = 0; // Current image index
var current; // Contains the current tuple (current.id is the id, current.path is the image itself, current.dots is the associated dots pattern)
var currentState;

var questionStartTime;
var nextBreakIndex; // Index at which the next break will be taken
var imageTimeout; // timeout object used when showing an image

// Response variables for each question
var userResponse;
var userResponseTime;
var dotsReference;
var dotsResponse;


// Constants initialized by survey.php
var USER_ID;
var NEXT_URL;	// Url to display after all the images are shown
var BREAK_INTERVAL;
var DOTS_DURATION;
var IMAGE_DURATION;
var CROSS_DURATION;
var SHOW_DOTS;

// LANG CONSTANTS
var MSG_WAIT;
var MSG_READY;
var MSG_LYING;
var MSG_DOTS;
var MSG_BREAK;
var MSG_EXIT_BREAK;
var MSG_TIMED_OUT;
var MSG_CONFIRM;
var MSG_EXIT_WARNING;

// Prints a warning if the user tries to leave
window.onbeforeunload = function () {
	return MSG_EXIT_WARNING;	
}

function enterState(nextState) {
	// console.log("[STATE]", nextState);

	exitState(currentState);
	currentState = nextState;

	// Elements that may change with a change of state
	var message = document.getElementById('message');
	var content = document.getElementById('content');
	var f_key = document.getElementById('f_key');
	var j_key = document.getElementById('j_key');
	var confirm_button = document.getElementById('confirm');

	// Default values
	removeChildren(content);
	f_key.style.visibility='hidden';
	j_key.style.visibility='hidden';
	confirm_button.style.visibility='hidden';
	

	switch(currentState) {
		case states.LOADING_IMAGES: {
			message.innerHTML = MSG_WAIT;

			nextBreakIndex = BREAK_INTERVAL; // Initialization
			$('#progress').attr('aria-valuemax', playlist.length);

			// Start loading images
			loadNextImage(0, []);
		}
		break;

		case states.WAITING_USER_TO_START: {
			message.innerHTML = MSG_READY;
		}
		break;

		case states.SHOWING_DOTS: {
			message.innerHTML = '';

			dotsReference = generate_dots_array_with(current.dots);
			var dotsPane = create_dots_table(dotsReference, false);

			content.appendChild(dotsPane);

			setTimeout(function() { enterState(states.SHOWING_FIXATION_CROSS); }, DOTS_DURATION);
		}
		break;

		case states.SHOWING_FIXATION_CROSS: {
			if (CROSS_DURATION > 0) {
				message.innerHTML = MSG_LYING;
				f_key.style.visibility="visible";
				j_key.style.visibility="visible";

				setImage(content, "../img/cross.png");

				setTimeout(function() { enterState(states.WAITING_USER_TO_ANSWER); }, CROSS_DURATION);
			} else {
				enterState(states.WAITING_USER_TO_ANSWER);
			}
		}
		break;

		case states.WAITING_USER_TO_ANSWER: {
			message.innerHTML = MSG_LYING;
			f_key.style.visibility="visible";
			j_key.style.visibility="visible";

			setImage(content, URL.createObjectURL(current.path));

			questionStartTime = new Date().getTime();
			
			if (IMAGE_DURATION > 0) {
				imageTimeout = setTimeout(function() { enterState(states.TIMED_OUT); }, IMAGE_DURATION);
			}
		}
		break;

		case states.WAITING_USER_TO_ANSWER_DOTS:  {
			message.innerHTML = MSG_DOTS;
			confirm_button.style.visibility="visible";
			confirm_button.innerHTML=MSG_CONFIRM;
			$('#confirm').attr('class', "btn btn-primary");

			dotsResponse = empty_dots_array();
			var dots_table = create_dots_table(dotsResponse, true);

			content.appendChild(dots_table);			
		}
		break;

		case states.TAKING_BREAK: {
			message.innerHTML = MSG_BREAK;

			$('#progress').attr('class', "progress-bar progress-bar-warning progress-bar-striped active");
			$('#progress').attr('style', "width: 100%;");

			confirm_button.style.visibility='visible';
			confirm_button.innerHTML=MSG_EXIT_BREAK;
			$('#confirm').attr('class', "btn");

			questionStartTime = new Date().getTime();
		}
		break;

		case states.TIMED_OUT: {
			message.innerHTML = MSG_TIMED_OUT;
			confirm_button.style.visibility="visible";
			confirm_button.innerHTML='OK';
			$('#confirm').attr('class', "btn btn-primary");

			saveUserAnswer(-1);
			dotsResponse = emptyDotsResponse();
		}
		break;

		default: {
			setError('Unknown state');
		}
	}
}

function exitState(state) {
	switch(state) {
		case states.WAITING_USER_TO_ANSWER: {
			if (IMAGE_DURATION > 0) {
				clearTimeout(imageTimeout);
			}
		}
		break;

		case states.TAKING_BREAK: {
			var breakTime = (new Date().getTime() - questionStartTime);

			insertBreakTime(breakTime);

			$('#progress').attr('class', "progress-bar progress-bar-success");
			setProgress();
		}
		break;
	}
}

function eventKeyPress(event) {
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
	keyPress(chCode);
}



function keyPress(chCode) {
	switch(currentState) {
		case states.WAITING_USER_TO_START: {
			if (chCode == 32) { /* space */
				enterState(SHOW_DOTS ?
					states.SHOWING_DOTS :
					states.SHOWING_FIXATION_CROSS);
			}
		}
		break;		

		case states.WAITING_USER_TO_ANSWER: {
			if (chCode == 102 || chCode == 70) { /* f/F = Lying */
				saveUserAnswer(1);
				if (SHOW_DOTS) {
					enterState(states.WAITING_USER_TO_ANSWER_DOTS);
				} else {					
					showNextOrStop();
				}

			} else if (chCode == 106 || chCode == 74) { /* j/J = Not lying */
				saveUserAnswer(0);
				if (SHOW_DOTS) {
					enterState(states.WAITING_USER_TO_ANSWER_DOTS);
				} else {					
					showNextOrStop();
				}
			}
		}
		break;

		case states.WAITING_USER_TO_ANSWER_DOTS: {
			if (chCode == 32) { /* space */				
				showNextOrStop();
			}
		}
		break;	

		case states.TIMED_OUT: {
			if (chCode == 32) { /* space */
				showNextOrStop();
			}
		}
		break;	

		default:
	}

	/* tmp */
	// if (chCode == '98') { // b
	// 	enterState(states.TAKING_BREAK);
	// } else if (chCode == '115') {  // s
	// 	while (playlist.length > 1) {
	// 		incrementProgress();
	// 		playlist.pop();
	// 	}
	// }
}

function buttonPressed() {
	switch(currentState) {
		case states.WAITING_USER_TO_ANSWER_DOTS: {			
			showNextOrStop();
		}
		break;

		case states.TAKING_BREAK: {	
			showNext();
		}
		break;

		case states.TIMED_OUT: {
			showNextOrStop();
		}
		break;
	}
}

function showNextOrStop() {
	insertResponse();		
	incrementProgress();

	if (playlist.length == 0) {  /* End reached */
		setProperlyFinished();

	} else {
		if (counter > nextBreakIndex) {  /* Break reached */
			nextBreakIndex = nextBreakIndex + BREAK_INTERVAL;
			enterState(states.TAKING_BREAK);

		} else {			
			showNext();
		}
	}
}

function showNext() {
	current = playlist.pop();
	enterState(states.WAITING_USER_TO_START);
}

function saveUserAnswer(isLying) {
	userResponseTime = (new Date().getTime() - questionStartTime);
	userResponse = isLying;
}

function setError(e) {
	currentState = states.ERROR_OCCURRED;
	console.error("[ERROR] " + e);
}

function incrementProgress() {
	counter = counter + 1;
	setProgress();
}

function setProgress() {
	var max = parseInt($('#progress').attr('aria-valuemax'));
	$('#progress').attr('style', "width: " + (counter*100.0/max) + "%;");
}

function resetProgress() {
	$('#progress').attr('aria-valuenow', 0);
	$('#progress').attr('style', "width: 0%;");
	counter = 0;
}

function setImage(content, src) {
	var image = document.createElement('img');
	image.className = "img-responsive center-block";
	image.src = src;

	content.appendChild(image);
}



function loadNextImage(index, images_buffer_map) {
	/*
	Method description:

	The 'playlist' variables describes the list of all images to show (already in random order and containing repetitions)

	At first, the 'playlist' variable is a list of tuples containing:
		[ image_id , image_path , dots ]

	The goal of this method is to preload (download) the images so that 'playlist' becomes a list of tuples of:
		[ image_id , "actual image data" , dots ]

	

	This method loads one image at the specified index. Then, if needed, 
	this method recursively calls itslef with index+1 until the end is reached.

	In order to avoid downloading the same image several times (recall that the playlist contains repetitions), 
	the 'images_buffer_map' acts as a temporary buffer. It is a map [ image_id --> "actual image data" ]
	that contains all the already loaded images
	*/



	if (index == playlist.length) { // All images are loaded	
		$('#progress').attr('class', "progress-bar progress-bar-success");

		// Delayed for 1 second for smoother animations...
		setTimeout(function() {
			console.log('Loaded', index, 'images');
			resetProgress();
			showNext();
		}, 1000);
		return;
	}


	var tuple = playlist[index];

	var image_data = images_buffer_map[tuple.id];
	if (image_data != null) { // Image already on buffer
		tuple.path = image_data;

		incrementProgress();
		loadNextImage(index+1, images_buffer_map);
		return;
	}

	// Download image
	var xhr = new XMLHttpRequest();
	var url = '../images/'.concat(tuple.path);

	xhr.open('GET', url, true);
	xhr.responseType = 'blob';
	xhr.onload = function(e) {
		if (this.status == 200) {
			incrementProgress();

			var myBlob = this.response;	/* image data */

			tuple.path = myBlob;

			images_buffer_map[tuple.id] = myBlob;  /* put in buffer */
			loadNextImage(index+1, images_buffer_map);
		} else {
			setError('Cannot fetch image '
				+ url + ' (' 
				+ this.status + ', ' 
				+ this.statusText + ')');
		}
	}
	xhr.send();
}


function insertResponse() {
	// Insert a user response to the database
	if (!SHOW_DOTS) {
		dotsReference = emptyDotsResponse();
		dotsResponse = emptyDotsResponse();
	}

	jQuery.ajax({
		type: "POST",
		url: '../submit_answer.php',
		dataType: 'json',
		data: {
			userId: USER_ID,		
			imageId: current.id,
			userResponse: userResponse,
			userResponseTime: userResponseTime,
			dotsReference: dotsReference.join(''),
			dotsResponse: dotsResponse.join('')
		},

		success: function (obj, textstatus) {
			if ('error' in obj) {
				setError(obj.error);
			}
		},

    	error: function (blob, status, error) { 
    		setError('Cannot submit answer (' + status + ', ' + error + ')');
    	}
    });
}

function insertBreakTime(breakTime) {
	// update the 'break_time' field in the corresponding entry of the 'Users' table

	jQuery.ajax({
		type: "POST",
		url: '../update_break_time.php',
		dataType: 'json',
		data: {
			userId: USER_ID,		
			breakTime: breakTime
		},

		success: function (obj, textstatus) {
			if ('error' in obj) {
				setError(obj.error);
			}
		},

    	error: function (blob, status, error) { 
    		setError('Cannot submit break time (' + status + ', ' + error + ')');
    	}
    });
}

function removeChildren(node) {
	while (node.firstChild) {
		node.removeChild(node.firstChild);
	}
}

function emptyDotsResponse() {
	return ['-','-','-','-','-','-','-','-','-'];
}

function setProperlyFinished() {
	jQuery.ajax({
		type: "POST",
		url: '../set_properly_finished.php',

		success: function (obj, textstatus) {
			window.onbeforeunload = null;
			window.location.href = NEXT_URL;
		},

    	error: function (blob, status, error) { 
    		setError('Cannot set properly finished (' + status + ', ' + error + ')');
    	}
    });
}