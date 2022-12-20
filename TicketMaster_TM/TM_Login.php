<?php
error_reporting(E_ALL ^ E_NOTICE);

session_start();

if ($_SESSION['sesWorker'] == TRUE) {
    header('Location: TM_List.html');
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TM_style.css">
</head>

<body>
    <div id="headerbar">
        <div id="headerwrap">
            <a id="headertitle">TICKET<span>MASTER</span></a>
        </div>
    </div>

    <div id="loginpage">
        <div id="loginwrap">
            <a id="loginlogo">TICKET<span>MASTER</span></a>

            <form method="post" action="dbase/TMLogin.php">
                <input class="textbar" name="email" type="email" placeholder="Email">
                <input class="textbar" name="password" type="password" placeholder="Password">

                <input class="subbtn" type="submit" value="LOGIN">

                <a href="#">Passwort vergessen?</a>
            </form>
        </div>
    </div>

    <style>

    </style>

</html>