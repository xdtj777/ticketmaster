<?php
include "../../dbConnect.php";
include "../../utils.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    validateRequired(['tid']);

    $tid = mysqli_real_escape_string($dbcon, $_POST['tid']);
    $active = "0";
    if (isset($_POST['active'])) {
        $active = mysqli_real_escape_string($dbcon, $_POST['active']);
    }

    $sql = "UPDATE tickets SET active = {$active} WHERE tid = '{$tid}';";
    echo $sql;
    $sql_res = mysqli_query($dbcon, $sql);

    if (!$sql_res) {
        http_response_code(500);
    }
} else {
    http_response_code(405);
}
