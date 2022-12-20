function navbarLoad() {

    console.log("Loading navbar...");

    fetch('dbase/GetSessionWorker.php')
        .then(response => response.json())
        .then(client => {
            document.getElementById("usericonimg").src = client[0].img;
        })
}

function logout() {
    fetch("dbase/TMLogout.php", { method: "POST" })
    .then(res => res.text())
    .then(txt => {
        console.log(txt);

        window.location.href = "TM_Login.php";
    })
}