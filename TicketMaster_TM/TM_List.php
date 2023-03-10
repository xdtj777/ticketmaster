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
            <a id="headertitle">TICKET<span>MASTER</span></a>
            <div id="usericon" onclick="logout()">
                <img id="usericonimg" src="">
            </div>
        </div>
    </div>

    <div id="ticketlist">
        <h1>Ticket Liste / Offene Tickets</h1>

        <div id="sbar">
            <div id="searchbar">
                <input id="searchfield" type="text" placeholder="Suchen">
                <input id="searchbtn" type="submit" value="SUCHEN">
            </div>

            <a id="newbtn" onclick="openNewTicketEditor()">+ Ticket erstellen</a>
        </div>

        <table class="dt_table" id="tickettable">
            <tr class="dt_row dt_row_head">
                <td><a>Ticket</a></td>
                <td><a>Titel</a></td>
                <td><a>Kunde</a></td>
                <td><a>Bearbeitet am</a></td>
                <td><a>Priorität</a></td>
            </tr>
            <!---<tr class="dt_row">
                <td><a class="dt_id dt_tid">2FC7X</a></td>
                <td class="dt_name"><a>Der OKI-Drucker ist nicht auffindbar und es gibt einen Drucker, der ist offline</a></td>
                <td><a class="dt_id dt_cid">Deutsche Telekom AG<br><span>Geidkli, Medin</span></a></td>
                <td><a class="dt_date">vor 7 Tagen</a></td>
                <td><a class="dt_type">HIGH</a></td>
            </tr>--->
        </table>
    </div>

</body>

<script src="navbar.js"></script>
<script src="TM_List.js"></script>
<script>
    window.onload = function() {
        navbarLoad();
        loadList();
    }
</script>

<style>

</style>

</html>