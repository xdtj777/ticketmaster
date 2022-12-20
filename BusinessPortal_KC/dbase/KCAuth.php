<?php
error_reporting(E_ALL ^ E_NOTICE);

session_start();

if ($_SESSION['sesClient'] !== TRUE) {
    header('Location: KC_Login.php');
}

include "../dbConnect.php";
$sql = "SELECT * from clients WHERE cid = {$_SESSION['sesClientID']};";

$result = $dbcon->query($sql);

$user = $result->fetch_assoc();

function getGravatar($email)
{
    return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($email))) . "?d=retro&s=80";
}
