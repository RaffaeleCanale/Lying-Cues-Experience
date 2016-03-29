<?php
    // Submit a user answer for 1 image

    session_start();
    header('Content-Type: application/json');

    require_once('constants.php');  
    
    $response = array();

    if (!$_SESSION["training"]) {
        require_once('db_connection.php');
        
        $sql = "INSERT INTO ".TABLE_ANSWERS." (user_id, image_id, is_lying, response_time, dots_reference, dots_answer) VALUES (".
            "'".$_POST['userId']."', ".
            "'".$_POST['imageId']."', ".
            "'".$_POST['userResponse']."', ".
            "'".$_POST['userResponseTime']."', ".
            "'".$_POST['dotsReference']."', ".
            "'".$_POST['dotsResponse']."')";
        if ($conn->query($sql) === FALSE) {
            $response['error'] = "Insert failed: " . $conn->error;
        }
                
        $conn->close();
    }

    echo json_encode($response);
?>