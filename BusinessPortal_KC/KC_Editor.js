var urlParams = new URLSearchParams(window.location.search);

var cid;

window.onload = function() {

    console.log("Loading content...");

    cid = 1;
}

function createNewTicket() {
    fetch('../GetNewTicketID.php')
                .then(response => response.json())
                .then(data => {
                    var ntid = parseInt(Object.entries(data[0])[0][1]) + 1;

                    var active = "1";
                    var abt = "1";
                    var prio = "1";
                    var title = document.querySelector("#inTitle").value;
                    var desc = document.querySelector("#inText").value;

                    date = new Date().toISOString().slice(0, 19).replace('T', ' ');

                    let formData = new FormData();
                    formData.append('tid', ntid);
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
                });
}

function hid(num) {
    return num.toString(16).padStart(5, '0');
}

function exit() {
    open("KC_Landing.html", "_self");
}