<?php
// Register the time spent during the break

session_start();
header('Content-Type: application/json');


$response = array();

if (!$_SESSION["training"]) {
    include('db_connection.php');

    $sql = "UPDATE ".TABLE_USERS." SET break_time='".$_POST['breakTime']."' WHERE id=" . $_SESSION["userId"];
    
    if ($conn->query($sql) === FALSE) {
      $response['error'] = "Insert failed: " . $conn->error;
  }

  $conn->close();
}

echo json_encode($response);
?>