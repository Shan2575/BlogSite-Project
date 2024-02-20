<?php

include "dbConnection.php";

session_start();

if (isset($_SESSION['user_ID'])) {
    $user_ID = $_SESSION['user_ID'];
} else {
    $user_ID = $_SESSION['userID'];
}

$blogTitle = $_POST['blogTitle'];
$blogDesc = $_POST['blogDesc'];
$dateCreated = $_POST['dateCreated'];
$blogImage = $_POST['blogImage'];

$sql = $connection->prepare("INSERT INTO blogs (user_ID, blogTitle, blogDesc, dateCreated, blogImage) VALUES (?, ?, ? , ?, ?)");
$sql->bind_param("sssss", $user_ID, $blogTitle, $blogDesc, $dateCreated, $blogImage);

$sql->execute();

include "./profile.php";
