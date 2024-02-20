<?php

include "dbConnection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = $connection->prepare("INSERT INTO users (firstName, lastName, email, pwd) VALUES (?, ? , ? , ?)");
$sql->bind_param("ssss", $fname, $lname, $email, $password);

$sql->execute();

include "./log-me-in.php";
