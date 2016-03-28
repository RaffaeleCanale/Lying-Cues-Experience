<?php

session_start();

include('session_tracker.php');

$_SESSION["training"] = FALSE;

if (DEBUG_MODE) {
	include('db_connection.php');
  	$sql = "INSERT INTO ".TABLE_LOGS." (user_id, message) VALUES ("
        .$_SESSION['userId'].", '"
        ."Page: ready')";
  	$conn->query($sql);
  	$conn->close();
}

?>