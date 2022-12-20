<?php
error_reporting(E_ALL ^ E_NOTICE);

session_start();

if ($_SESSION['sesClient'] == TRUE) {
    header('Location: KC_Landing.html');
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="KC_style.css">
</head>

<body>
    <div id="headerbar">
        <div id="headerwrap">
            <a id="headertitle">Business<span>Portal</span></a>
        </div>
    </div>

    <div id="loginpage">
        <div id="loginwrap">
            <a id="loginlogo">Business<span>Portal</span></a>

            <form method="post" action="dbase/KCLogin.php">
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