<?php 

session_start();

$_SESSION['surveying'] = FALSE;

if ( $_SESSION['training'] ) {
	return;
}

include('db_connection.php'); // Creates a connection $conn
include('constants.php');

$sql = 'UPDATE '.TABLE_USERS.' SET properly_finished=true WHERE id=' . $_SESSION['userId'];
if ($conn->query($sql) === FALSE) {
    
}

$conn->close();

$_SESSION['finished'] = TRUE;

?>