<?php 

session_start();

include('db_connection.php'); // Creates a connection $conn
include('constants.php');

if (sizeof($_POST) != 5) {
	header('Location: index.php');
	exit();
}

$sql = "INSERT INTO ".TABLE_USERS." (age, gender, degree, origin_country, residence_country, show_dots) VALUES ('". join("', '",$_POST). "', " . (SHOW_DOTS?"true":"false") . ")";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  $_SESSION["userId"] = $last_id;
} else {  
  // echo mysqli_error($conn). "<br>";
  die('An error occurred, please try again.<br>If this problem persists, contact a webmaster at: <a href="mailto:shs@altervista.org">shs@altervista.org</a>');
}

$conn->close();

$_SESSION['training'] = TRUE;
$_SESSION['finished'] = FALSE;
$_SESSION['surveying'] = FALSE;

 ?>