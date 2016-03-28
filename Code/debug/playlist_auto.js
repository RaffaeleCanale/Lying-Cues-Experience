var origShowNextOrStop = showNextOrStop;
showNextOrStop = function() {
	if (playlist.length == 0)  {/* End reached */
		console.log('Waiting for background processes...');
		setTimeout(function() {
			origShowNextOrStop();
		}, 5000);
	} else {
		origShowNextOrStop();
	}	

}

var origEnterState = enterState;
enterState = function(state) {
	origEnterState(state);

	switch(state) {
		case states.WAITING_USER_TO_START: {			
			enterState(SHOW_DOTS ?
				states.SHOWING_DOTS :
				states.SHOWING_FIXATION_CROSS);
		}
		break;
		case states.WAITING_USER_TO_ANSWER: {
			var answer = Math.floor(Math.random()*2);
			saveUserAnswer(answer);
			if (SHOW_DOTS) {
				enterState(states.WAITING_USER_TO_ANSWER_DOTS);
			} else {					
				showNextOrStop();
			}
		}
		break;

		case states.WAITING_USER_TO_ANSWER_DOTS: {
			if (SHOW_DOTS) {
				for (var i = dotsResponse.length - 1; i >= 0; i--) {
					dotsResponse[i] = Math.floor(Math.random()*2);
				};
			}
			showNextOrStop();
		}
		break;

	}
}