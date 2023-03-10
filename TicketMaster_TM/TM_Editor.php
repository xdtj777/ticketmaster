<?php
include "dbase/TMAuth.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TM_style.css">
    <title>TicketMaster</title>
</head>

<body>
    <div id="headerbar">
        <div id="headerwrap">
            <a id="headertitle" href="TM_List.php">TICKET<span>MASTER</span></a>
            <div id="usericon" onclick="logout()">
                <img id="usericonimg" src="">
            </div>
        </div>
    </div>

    <div id="ticketlist">
        <h1 id="editorheadline">Ticket Editor / Bearbeiten</h1>

        <div id="editfield">
            <form action="">
                <div id="editbar1">
                    <input type="text" id="inTID" disabled="true" value="#00000">
                    <select name="cid" id="inCID">
                        <option value="0" disabled selected>Kunde</option>
                    </select>
                    <select name="abt" id="inABT">
                        <option value="0" disabled selected>Abteilung</option>
                    </select>
                    <select name="prio" id="inPrio">
                        <option value="0" disabled selected>Priorität</option>
                    </select>
                </div>

                <input type="text" id="inTitle" placeholder="Titel">
                <div id="edittext">
                    <textarea name="" id="inText" cols="1" rows="10" placeholder="Beschreibung"></textarea>
                </div>

                <div id="btnbar">
                    <div id="subedit">
                        <a class="sbtn" id="subsave" onclick="updateTicket()">✔ SPEICHERN</a>
                        <a class="sbtn btncool" id="subx" onclick="closeTicket()">✖ ERLEDIGT</a>
                        <a class="sbtn" id="subback" onclick="exit()">ZURÜCK</a>
                    </div>
                    <div id="sub2">
                        <a class="sbtn btncool" id="subnew" onclick="createNewTicket()">+ ERSTELLEN</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="navbar.js"></script>
<script src="TM_Editor.js"></script>
<script>
    window.onload = function() {
        navbarLoad();
        loadEditor();
    }
</script>

<style>

</style>

</html>