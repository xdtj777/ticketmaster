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

    <div id="ticketlist">
        <h1>Mein Konto / Tickets</h1>

        <div id="sbar">
            <div id="searchbar">
                <input id="searchfield" type="text" placeholder="Suchen">
                <input id="searchbtn" type="submit" value="SUCHEN">
            </div>
        </div>

        <table class="dt_table">
            <tr class="dt_row dt_row_head">
                <td><a>Ticket</a></td>
                <td><a>Titel</a></td>
                <td><a>Bearbeitet am</a></td>
            </tr>
            <tr class="dt_row">
                <td><a class="dt_id dt_tid">Q002A</a></td>
                <td class="dt_name"><a>Terminal 27086 neu konfigurieren</a></td>
                <td><a class="dt_date">vor 3 Tagen</a></td>
            </tr>
            <tr class="dt_row">
                <td><a class="dt_id dt_tid">F0Z2G</a></td>
                <td class="dt_name"><a>Remote Desktop Verbindung aufbauen und aktualisieren</a></td>
                <td><a class="dt_date">vor 5 Tagen</a></td>
            </tr>
        </table>
    </div>
</body>

<style>

</style>

</html>