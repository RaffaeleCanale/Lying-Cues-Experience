<?php
// Read the documentation (Constants Definitions.txt) for more information on these constants.

define('TEST_MODE', FALSE); 
define('SHOW_DOTS', FALSE); 
define('DOTS_DURATION', TEST_MODE ? 1 : 900);
define('DOTS_COUNTS', '2;4');
define('RPT_TRAINING', 1);
define('RPT_SURVEY', 4);
define('NB_BREAKS_TRAINING', 0);
define('NB_BREAKS_SURVEY', SHOW_DOTS ? 1 : 0);
define('FIXATION_CROSS_DURATION', TEST_MODE ? 0 : 0);
define('VIDEO_DURATION', 0);
define('EXPERIENCE_DURATION', SHOW_DOTS ? 30 : 30);
define('END_REDIRECT_DELAY', 0);
define('END_REDIRECT_PAGE', 'index.php');

define('TABLE_USERS', 'Users_Videos');
define('TABLE_ANSWERS', 'Answers_Videos');
define('TABLE_SUBJECTS', 'Subjects_Videos');
define('TABLE_TRAINING', 'Training_Videos');

?>