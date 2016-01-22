<?php
    // Submit a user answer for 1 image

	session_start();
    header('Content-Type: application/json');

    include('constants');
    

	
    $response = array();

    if (!$_SESSION["training"]) {
        include('db_connection.php');
        include('constants.php');
        
        $sql = "INSERT INTO ".TABLE_ANSWERS." (user_id, video_id, is_lying, response_time, dots_reference, dots_answer) VALUES (".
            "'".$_POST['userId']."', ".
        	"'".$_POST['videoId']."', ".
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