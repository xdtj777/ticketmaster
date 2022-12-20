<?php
session_start();
unset($_SESSION['sesWorker']);
unset($_SESSION['sesWorkerID']);
header('Location: TM_Login.php');
