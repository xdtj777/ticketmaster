<?php
include "../../dbConnect.php";

if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
}
echo "Connected successfully<br>";

$pass = $_POST['password'];
$email = $_POST['email'];

$sql = "SELECT * FROM usersworkers WHERE email = '{$email}'";

$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        session_start();
        session_regenerate_id();
        $_SESSION['sesWorker'] = TRUE;
        $_SESSION['sesWorkerID'] = $row['wid'];
    }
}

header('Location: ../TM_List.php');
