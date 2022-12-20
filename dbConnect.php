<?php
include "dotenv.php";

use DevCoder\DotEnv;

(new DotEnv(dirname(__DIR__, 1) . '/ticketmaster/.env'))->load();

$dbcon = mysqli_connect(getenv("DB_HOST"), getenv("DB_USER"), getenv("DB_PASS"), getenv("DB_ID"));
