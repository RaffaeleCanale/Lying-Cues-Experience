<?php

session_start();

require_once('session_tracker.php');
require_once('constants.php');

$_SESSION["training"] = FALSE;

if (DEBUG_MODE) {
	require_once('db_connection.php');
  	$sql = "INSERT INTO ".TABLE_LOGS." (user_id, message) VALUES ("
        .$_SESSION['userId'].", '"
        ."Page: ready')";
  	$conn->query($sql);
  	$conn->close();
}

?>