<?php
$username = "if0_36017619";
$password = "xvrCG6hVMtB";
$host = "sql108.byetcluster.com";
$database = "if0_36017619_blogsite_db";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
