<?php

require_once('constants.php');

$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

$user_agent = $_SERVER['HTTP_USER_AGENT'];


$sql = "INSERT INTO ".TABLE_LOGS." (user_id, message) VALUES ("
    .$_SESSION['userId'].", '"
    ."User info: ".  $ip . " " . $user_agent . "')";
$conn->query($sql);

?>