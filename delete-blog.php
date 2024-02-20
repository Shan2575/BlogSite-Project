<?php

include('dbConnection.php');

session_start();

$blogID = $_SESSION['blogID'];

$sql = $connection->prepare("DELETE FROM blogs WHERE blogID = ?");
$sql->bind_param("i", $blogID);

$sql->execute();

header('Location: ./profile.php');
