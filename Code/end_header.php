<?php

session_start();



include('session_tracker.php');


if (!$_SESSION['finished'] && !DEBUG_MODE) {
	session_destroy(); 
    header('Location: index.php');
    exit();
}   

include('db_connection.php'); // Creates a connection $conn


if (DEBUG_MODE) {
  $sql = "INSERT INTO ".TABLE_LOGS." (user_id, message) VALUES ("
        .$_SESSION['userId'].", '"
        ."Page: end')";
  $conn->query($sql);
}


$redirect_page = END_REDIRECT_PAGE;

$sql = 'SELECT * FROM '.TABLE_ANSWERS.' WHERE user_id = '.$_SESSION['userId'];
$query = $conn->query($sql);
if (!$query) {
	$score_friendly = '??%';
	return;
}
$query->fetch_assoc;
$total=$query->num_rows;

$sql = 'SELECT * FROM '.TABLE_ANSWERS.' a'.
' JOIN '.TABLE_SUBJECTS.' v ON a.video_id = v.id'.
' WHERE a.user_id = ' . $_SESSION['userId'] .
' AND v.is_lying=a.is_lying';

$query = $conn->query($sql);
if (!$query) {
	$score_friendly = '??%';
	return;
}
$query->fetch_assoc;
$found=$query->num_rows; 

$score = $found/$total;
$score_friendly = number_format( $score * 100, 2 ) . '%';


$conn->close();


session_destroy(); 

?>