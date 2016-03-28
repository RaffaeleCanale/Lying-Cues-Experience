<?php

session_start();

include('session_tracker.php');

if (!$_SESSION['finished'] && !DEBUG_MODE) {
	session_destroy(); 
    header('Location: index.php');
    exit();
}

session_destroy(); 

?>