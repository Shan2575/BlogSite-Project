<?php
$username = "**************";
$password = "**************";
$host = "**************";
$database = "**************";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
