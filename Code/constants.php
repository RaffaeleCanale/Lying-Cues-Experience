<?php
// CONSTANTS OF THE EXPERIMENT

session_start();


define("TEST_MODE", false); // If TRUE, during the images/dots display, the user answer will be simulated
define("SHOW_DOTS", $_SESSION["SHOW_DOTS"]);  // This constant is set by 'index_header.php' (it depends on the url)


// Number of images repetitons during training/survey
define("RPT_TRAINING", 1);
define("RPT_SURVEY", 4);


// Number of programmed breaks during training/survey
define("NB_BREAKS_TRAINING", 0);
define("NB_BREAKS_SURVEY", SHOW_DOTS ? 1 : 0);


// Duration (in milliseconds) of display for the cross/dots/image
define("FIXATION_CROSS_DURATION", TEST_MODE ? 1 : 500);
define("DOTS_DURATION", TEST_MODE ? 1 : 900);
define("IMAGE_DURATION", 15000);


// Estimation of the duration (in minutes) of the experiment
define("EXPERIENCE_DURATION", SHOW_DOTS ? 30 : 30);

// Number of dots in a pattern (separated by ';')
// 	 2;4 means that for each image, 
//	 half of the repetitons will be presented with 2 dots,
//	 the other half with 4
define("DOTS_COUNTS", "2;4");

// Delay (milliseconds) before redirecting to the homepage at the end of the experiment
define("END_REDIRECT_DELAY", 10000);
define("END_PAGE", "end.php");
?>