<?php
// Read the documentation (Constants Definitions.md) for more information on these constants.

define('AUTO_MODE', FALSE); 
define('DEBUG_MODE', TRUE); 
define('SHOW_DOTS', FALSE); 
define('DOTS_DURATION', AUTO_MODE ? 1 : 900);
define('DOTS_COUNTS', '2;4');
define('RPT_SURVEY', 4);
define('RPT_TRAINING', 1);
define('NB_BREAKS_SURVEY', SHOW_DOTS ? 1 : 0);
define('NB_BREAKS_TRAINING', 0);
define('FIXATION_CROSS_DURATION', AUTO_MODE ? 0 : 0);
define('IMAGE_DURATION', 0);
define('EXPERIENCE_DURATION', SHOW_DOTS ? 30 : 10);
define('END_REDIRECT_DELAY', 0);
define('END_REDIRECT_PAGE', 'index.php');

define('TABLE_USERS', 'Users');
define('TABLE_ANSWERS', 'Answers');
define('TABLE_SUBJECTS', 'Subjects');
define('TABLE_TRAINING', 'Training');
define('TABLE_LOGS', 'Logs');

?>