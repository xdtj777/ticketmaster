<?php
session_start();
unset($_SESSION['sesClient']);
unset($_SESSION['sesClientID']);
header('Location: KC_Login.php');
