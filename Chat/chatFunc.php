<?php

session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$message = $_POST['message'];

$sql = "INSERT INTO message (uid, message)
VALUES ('$uid', '$message')";

$result = $conn->query($sql);

header("Location: chat.php");

?>