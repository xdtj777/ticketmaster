<?php
include "../../dbConnect.php";

session_start();

$sql = "SELECT * FROM `workers` WHERE `id` = {$_SESSION['sesWorkerID']};";

$sql_res = mysqli_query($dbcon, $sql);

if (!$sql_res) {
    http_response_code(500);
}

$dbdata = array();

while ($row = $sql_res->fetch_assoc()) {
    $dbdata[] = $row;
}

header("Content-Type: application/json");
echo json_encode($dbdata);
