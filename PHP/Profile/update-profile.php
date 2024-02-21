<?php

include "../dbConnection.php";

$userID = $_POST['userID'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$bio = $_POST['bio'];


$sql = $connection->prepare("UPDATE users SET firstName = ?, lastName = ?, email = ?, pwd = ?, bio = ?  WHERE userID = ?");

$sql->bind_param('ssssss', $fname, $lname, $email, $password, $bio, $userID);
$sql->execute();


include "../LoginSignup/log-me-in.php";
