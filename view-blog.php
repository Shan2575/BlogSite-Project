<?php

include('dbConnection.php');

$blogID = $_POST["blogID"];

$sql = $connection->prepare("SELECT * FROM blogs WHERE blogID = ?");
$sql->bind_param("i", $blogID);

$sql->execute();
$results = $sql->get_result();


if ($results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        session_start();
        $_SESSION['blogID'] = $row["blogID"];
        $_SESSION['user_ID'] = $row["user_ID"];
        $_SESSION['blogTitle'] = $row["blogTitle"];
        $_SESSION['blogDesc'] = $row["blogDesc"];
        $_SESSION['dateCreated'] = $row["dateCreated"];
        $_SESSION['blogImage'] = $row["blogImage"];
        header("Location: ./blog-template.php");
    }
} else {
    echo "didnt work";
}
