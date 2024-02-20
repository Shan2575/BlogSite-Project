<?php

include('dbConnection.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = $connection->prepare("SELECT * FROM users WHERE email = ? AND pwd = ?");
$sql->bind_param("ss", $email, $password);

$sql->execute();
$results = $sql->get_result();


if ($results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        setcookie('authenticated', true);
        session_start();
        $_SESSION['userID'] = $row["userID"];
        $_SESSION['fname'] = $row["firstName"];
        $_SESSION['lname'] = $row["lastName"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['pwd'] = $row["pwd"];
        $_SESSION['bio'] = $row["bio"];
        header("Location: ./profile.php");
    }
} else {
    header("Location: ./login.php");
    echo 'incorrect username/ password please try again.';
}
