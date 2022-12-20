var urlParams = new URLSearchParams(window.location.search);

var tid;
var cid;
var cname;
var date;

function loadEditor() {

    console.log("Loading content...");

    urlParams = new URLSearchParams(window.location.search);

    if(urlParams.get("ticket") != null) {
        document.getElementById("sub2").style.display = "none";

        fetch('dbase/GetTicket.php?tid=' + urlParams.get("ticket"))
        .then(response => response.json())
        .then(data => {
            var ticket = data[0];

            tid = ticket.tid;
            cid = ticket.cid;
            date = ticket.date;

            var hid = ticket.tid.toString(16).padStart(5, '0');

            document.getElementById("inTID").setAttribute("value", "#" + hid);
            document.getElementById("inTitle").setAttribute("value", ticket.title);
            document.getElementById("inText").innerText = ticket.descr;

            fetch('dbase/GetClients.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(client => {
                        var dom = document.createElement("option");
                        dom.setAttribute("value", client.cid);
                        dom.innerText = client.cid.toString(16).padStart(5, '0') + " " + client.name;
                        if(ticket.cid == client.cid) {
                            cname = client.name;
                            dom.selected = true;
                        }

                        document.getElementById("inCID").appendChild(dom);
                        document.getElementById("inCID").disabled = true;
                    });
                    
                    document.title = hid + " | " + cname + " - TicketMaster";
                });

            fetch('dbase/GetAbteilungen.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(abt => {
                        var dom = document.createElement("option");
                        dom.setAttribute("value", abt.id);
                        dom.innerText = abt.name;
                        if(ticket.abteilung == abt.id) {
                            dom.selected = true;
                        }

                        document.getElementById("inABT").appendChild(dom);
                    });
                });
                    
            fetch('dbase/GetPrios.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(prio => {
                        var dom = document.createElement("option");
                        dom.setAttribute("value", prio.id);
                        dom.innerText = prio.displayName;
                        if(ticket.prio == prio.id) {
                            dom.selected = true;
                        }

                        document.getElementById("inPrio").appendChild(dom);
                    });
                });
        });
    } else {
        document.getElementById("subedit").style.display = "none";

        fetch('dbase/GetClients.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(client => {
                        var dom = document.createElement("option");
                        dom.setAttribute("value", client.cid);
                        dom.innerText = client.cid.toString(16).padStart(5, '0') + " " + client.name;

                        document.getElementById("inCID").appendChild(dom);
                    });
                });

            fetch('dbase/GetAbteilungen.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(abt => {
                        var dom = document.createElement("option");
                        dom.setAttribute("value", abt.id);
                        dom.innerText = abt.name;

                        document.getElementById("inABT").appendChild(dom);
                    });
                });
                    
            fetch('dbase/GetPrios.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(prio => {
                        var dom = document.createElement("option");
                        dom.setAttribute("value", prio.id);
                        dom.innerText = prio.displayName;

                        document.getElementById("inPrio").appendChild(dom);
                    });
                });

                fetch('../GetNewTicketID.php')
                .then(response => response.json())
                .then(data => {
                    var ntid = parseInt(Object.entries(data[0])[0][1]) + 1;
                    document.getElementById("inTID").setAttribute("value", "#" + hid(ntid));
                    tid = ntid;
                });
    }

}

function openTicketEditor(tid) {
    open("TM_Editor.php?ticket=" + tid, "_self");
}

function openNewTicketEditor() {
    open("TM_Editor.php", "_self");
}

function updateTicket() {
    var active = "1";
    var abt = document.querySelector("#inABT").value;
    var prio = document.querySelector("#inPrio").value;
    var title = document.querySelector("#inTitle").value;
    var desc = document.querySelector("#inText").value;

    let formData = new FormData();
    formData.append('tid', tid);
    formData.append('cid', cid);
    formData.append('active', active);
    formData.append('abteilung', abt);
    formData.append('prio', prio);
    formData.append('title', title);
    formData.append('descr', desc);
    formData.append('date', date);

    console.log(formData);

    fetch("dbase/UpdateTicket.php",
    {
        body: formData,
        method: "POST"
    })
    .then(response => response.text())
    .then((text) => {
        console.log("Ticket saved");
    })
}

function closeTicket() {
    let formData = new FormData();
    formData.append('tid', tid);

    console.log(formData);

    fetch("dbase/CloseTicket.php",
    {
        body: formData,
        method: "POST"
    })
    .then(response => response.text())
    .then((text) => {
        console.log("Ticket closed");
        console.log(text);
        exit();
    })
}

function createNewTicket() {
    var active = "1";
    var abt = document.querySelector("#inABT").value;
    var prio = document.querySelector("#inPrio").value;
    var title = document.querySelector("#inTitle").value;
    var desc = document.querySelector("#inText").value;
    var cid = document.querySelector("#inCID").value;

    date = new Date().toISOString().slice(0, 19).replace('T', ' ');

    let formData = new FormData();
    formData.append('tid', tid);
    formData.append('cid', cid);
    formData.append('active', active);
    formData.append('abteilung', abt);
    formData.append('prio', prio);
    formData.append('title', title);
    formData.append('descr', desc);
    formData.append('date', date);

    console.log(formData);

    fetch("../CreateNewTicket.php",
    {
        body: formData,
        method: "POST"
    })
    .then(response => response.text())
    .then((text) => {
        console.log("Ticket created");
        exit();
    })
}

function hid(num) {
    return num.toString(16).padStart(5, '0');
}

function exit() {
    open("TM_List.php", "_self");
}