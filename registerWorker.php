#!/usr/bin/php
<?php
include "dbConnect.php";

$id = $argv[1];
$user = $argv[3];
$pass = $argv[4];
$mail = $argv[2];
$wid = $argv[5];

if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
}
echo "Connected successfully\n";

$pass = password_hash($pass,  PASSWORD_BCRYPT);

$sql = "INSERT INTO usersworkers (id, email, username, password, wid) VALUES ('{$id}', '{$mail}', '{$user}', '{$pass}', '{$wid}')";
echo $sql;

if (mysqli_query($dbcon, $sql)) {
    echo "Success\n";
    echo "Created user " . $user;
} else {
    echo "Error " . $dbcon->error;
}
