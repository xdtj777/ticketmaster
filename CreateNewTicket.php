<?php
include "dbConnect.php";
include "utils.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    validateRequired(['tid', 'title', 'cid']);

    $tid = mysqli_real_escape_string($dbcon, $_POST['tid']);
    $active = "1";
    if (isset($_POST['active'])) {
        $active = mysqli_real_escape_string($dbcon, $_POST['active']);
    }
    $prio = "1";
    if (isset($_POST['prio'])) {
        $prio = mysqli_real_escape_string($dbcon, $_POST['prio']);
    }
    $abt = "1";
    if (isset($_POST['abteilung'])) {
        $abt = mysqli_real_escape_string($dbcon, $_POST['abteilung']);
    }
    $cid = mysqli_real_escape_string($dbcon, $_POST['cid']);
    $date = mysqli_real_escape_string($dbcon, $_POST['date']);
    $title = mysqli_real_escape_string($dbcon, $_POST['title']);
    $description = "NULL";
    if (isset($_POST['descr'])) {
        $description = mysqli_real_escape_string($dbcon, $_POST['descr']);
    }

    $sql = "INSERT INTO tickets(tid, active, title, descr, prio, date, cid, abteilung) VALUES('{$tid}', '{$active}', '{$title}', '{$description}', '{$prio}', '{$date}', '{$cid}', '{$abt}');";
    echo $sql;
    $sql_res = mysqli_query($dbcon, $sql);

    if (!$sql_res) {
        http_response_code(500);
    }
} else {
    http_response_code(405);
}
