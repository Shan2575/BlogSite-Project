<?php

include "dbConnection.php";

$blogID = $_POST['blogID'];
$blogTitle = $_POST['blogTitle'];
$blogDesc = $_POST['blogDesc'];
$blogImage = $_POST['blogImage'];

$sql = $connection->prepare("UPDATE blogs SET blogTitle = ?, blogDesc = ?, blogImage = ? WHERE blogID = ?");

$sql->bind_param('ssss', $blogTitle, $blogDesc, $blogImage, $blogID);
$sql->execute();


include "./view-blog.php";
