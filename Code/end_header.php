<?php

session_start();

include('session_tracker.php');

if (!$_SESSION['finished']) {    
	session_destroy(); 
    header('Location: index.php');
    exit();
}   


include('db_connection.php'); // Creates a connection $conn
include('constants.php');

$sql = 'SELECT * FROM '.TABLE_ANSWERS.' WHERE user_id = '.$_SESSION['userId'];
$query = $conn->query($sql) or die('?');
$query->fetch_assoc;
$total=$query->num_rows;

$sql = 'SELECT * FROM '.TABLE_ANSWERS.' a'.
' JOIN '.TABLE_VIDEOS.' v ON a.video_id = v.id'.
' WHERE a.user_id = ' . $_SESSION['userId'] .
' AND v.is_lying=a.is_lying';

$query = $conn->query($sql);
$query->fetch_assoc;
$found=$query->num_rows; 

$score = $found/$total;
$score_friendly = number_format( $score * 100, 2 ) . '%';


$conn->close();


session_destroy(); 

?>