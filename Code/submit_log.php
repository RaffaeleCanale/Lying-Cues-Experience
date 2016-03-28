<?php
    // Submit a user answer for 1 image
    
    header('Content-Type: application/json');
    
    include('constants.php');
    include('db_connection.php');
          
        
    $sql = "INSERT INTO ".TABLE_LOGS." (user_id, message) VALUES ("
        .$_POST['userId'].", '"
        .$_POST['message']."')";
    

    $response = array();
    if ($conn->query($sql) === FALSE) {
        $response['error'] = "Log failed: " . $conn->error;
    }
                
    $conn->close();
    
    echo json_encode($response);
?>