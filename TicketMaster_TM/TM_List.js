window.onload = function() {

    console.log("Loading content...");

    var ticketlist = [];
    fetch('dbase/GetTicketlist.php')
        .then(response => response.json())
        .then(data => {
            ticketlist = data;

            ticketlist.forEach(ticket => {
                var tr = document.createElement('tr');
                tr.classList.add("dt_row");
                if(ticket.active == 0) {
                    tr.classList.add("dt_closed");
                }

                tr.onclick = function() { openTicketEditor(ticket.tid) };

                var tdID = document.createElement('td');
                tdID.innerHTML = "<a class=\"dt_id dt_tid\">" + ticket.tid.toString(16).padStart(5, '0') + "</a>";
                tr.appendChild(tdID);

                var tdTitle = document.createElement('td');
                tdTitle.classList.add("dt_name");
                tdTitle.innerHTML = "<a>" + ticket.title + "</a>";
                tr.appendChild(tdTitle);

                fetch('dbase/GetClient.php?cid=' + ticket.cid)
                    .then(response => response.json())
                    .then(data => {
                        var tdCid = document.createElement('td');
                        tdCid.innerHTML = "<a class=\"dt_id dt_cid\">" + data[0].name + "<br><span>" + data[0].asp_name + ", " + data[0].asp_lastname + "</span></a>";
                        tr.appendChild(tdCid);

                        var tdDate = document.createElement('td');
                        tdDate.innerHTML = "<a class=\"dt_date\">" + ticket.date + "</a>";
                        tr.appendChild(tdDate);

                        fetch('dbase/GetPrio.php?id=' + ticket.prio)
                            .then(response => response.json())
                            .then(data => {
                                var tdType = document.createElement('td');
                                var typecss = "dt_type";
                                switch (parseInt(ticket.prio)) {
                                    case 1:
                                        typecss += " dt_type_low";
                                        break;
                                    case 2:
                                        typecss += " dt_type_mid";
                                        break;
                                    case 4:
                                        typecss += " dt_type_xpress";
                                        break;
                                    default:
                                        break;
                                }
                                tdType.innerHTML = "<a class=\"" + typecss + "\">" + data[0].displayName + "</a>";
                                tr.appendChild(tdType);

                                var domlist = document.getElementById("tickettable");
                                domlist.appendChild(tr);
                            });
                    });
            });
        });

}

function openTicketEditor(tid) {
    open("TM_Editor.html?ticket=" + tid, "_self");
}

function openNewTicketEditor() {
    open("TM_Editor.html", "_self");
}