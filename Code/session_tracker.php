<?php
require_once('constants.php');

if (DEBUG_MODE) {
	return;
}

function startExperience() {
	$_SESSION['surveying'] = TRUE;
}

function stopExperience() {
	$_SESSION['surveying'] = FALSE;
}

if (!isset($_SESSION)) {
	session_start();
}

if ( !array_key_exists('userId', $_SESSION) || $_SESSION['surveying'] ) {
	
	session_destroy(); 
	header('Location: index.php');
	exit();
}

?>