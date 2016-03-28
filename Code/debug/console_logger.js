function logMessage(message) {
	if (USER_ID == '') {
		USER_ID = -1;
	}

	jQuery.ajax({
		type: "POST",
		url: '../submit_log.php',
		dataType: 'json',
		data: {
			userId: USER_ID,
			message: message
		},

		success: function (obj, textstatus) {
			if ('error' in obj) {
				console.error(obj.error);
			}
		},

    	error: function (blob, status, error) {
    		console.error('Cannot log (' + status + ', ' + error + ')');
    	}
    });
}

var logOriginal = console.log;
console.log = function() {
	var args = $.makeArray(arguments);
	logMessage(args.join(' '));

	args[0] = '[LOGGED] ' + args[0];
  	logOriginal.apply(console, args);
};

var errorOriginal = console.error;
console.error = function() {
	var args = $.makeArray(arguments);
	logMessage(args.join(' '));

	args[0] = '[LOGGED] ' + args[0];
  	errorOriginal.apply(console, args);
};