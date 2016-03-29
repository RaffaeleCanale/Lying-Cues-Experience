<?php

session_start();

require_once('session_tracker.php');
require_once('constants.php');

if (!$_SESSION['finished'] && !DEBUG_MODE) {
	session_destroy(); 
    header('Location: index.php');
    exit();
}

session_destroy(); 

?>