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
            <a id="headertitle" href="#">Business<span>Portal</span></a>
            <div id="usericon" onclick="logout()">
                <img id="usericonimg" src="">
            </div>
        </div>
    </div>

    <div id="wrapwrapper">
        <div id="uniwrap">
            <div id="ticketlist">
                <h1 id="editorheadline">Mein Konto</h1>

                <div id="landingbox">
                    <div id="kontoview">
                        <img id="kontoviewimg" src="">

                        <div>
                            <a id="kvName">MSoft GmbH</a>
                            <a id="kvASP">Hackling, Pascal</a>

                            <a id="kvType">✔ Business Geschaftskunde</a>
                        </div>
                    </div>

                    <div id="toolbox">
                        <a class="boxitem" onclick="openContact()">
                            <img src="../img/handshake.svg" alt="">
                            <span>Kontakt</span>
                        </a>
                        <a class="boxitem" href="KC_List.php">
                            <img src="../img/list.svg" alt="">
                            <span>Tickets</span>
                        </a>
                        <a class="boxitem" href="KC_FAQ.php">
                            <img src="../img/feedback.svg" alt="">
                            <span>Problem melden</span>
                        </a>
                        <a class="boxitem" href="KC_FAQ.php">
                            <img src="../img/quiz.svg" alt="">
                            <span>FAQ</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="navbar.js"></script>
<script src="KC_Landing.js"></script>
<script>
    window.onload = function() {
        navbarLoad();
    }
</script>

<style>

</style>

</html>