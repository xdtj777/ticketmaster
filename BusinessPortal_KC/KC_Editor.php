<?php
include "dbase/KCAuth.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="KC_style.css">
    <title>BusinessPortal</title>
</head>

<body>
    <div id="headerbar">
        <div id="headerwrap">
            <a id="headertitle" href="KC_Landing.php">Business<span>Portal</span></a>
            <div id="usericon" onclick="logout()">
                <img id="usericonimg" src="">
            </div>
        </div>
    </div>

    <div id="wrapwrapper">
        <div id="loginwrap">
            <div id="ticketlist">
                <h1 id="editorheadline">Mein Konto / Problem melden</h1>

                <div id="editfield">
                    <form action="">
                        <input type="text" id="inTitle" placeholder="Titel">
                        <div id="edittext">
                            <textarea name="" id="inText" cols="1" rows="10" placeholder="Beschreibung"></textarea>
                        </div>

                        <div id="btnbar">
                            <div id="subedit">
                                <a class="sbtn btncool" id="subx" onclick="createNewTicket()">✔ PROBLEM MELDEN</a>
                                <a class="sbtn" id="subback" onclick="exit()">ZURUCK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="KC_Editor.js"></script>

<style>

</style>

</html>