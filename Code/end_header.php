<?php

session_start();

include('session_tracker.php');

if (!$_SESSION['finished']) {    
	session_destroy(); 
    header('Location: index.php');
    exit();
}   

session_destroy(); 

?>