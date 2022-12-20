function navbarLoad() {

    console.log("Loading navbar...");

    fetch('dbase/GetSessionClient.php')
        .then(response => response.json())
        .then(client => {
            document.getElementById("usericonimg").src = client[0].img;
            if(document.getElementById("kontoviewimg") != null) {
                document.getElementById("kontoviewimg").src = client[0].img;
            }
        })
}

function logout() {
    fetch("dbase/KCLogout.php", { method: "POST" })
    .then(res => res.text())
    .then(txt => {
        console.log(txt);

        window.location.href = "KC_Login.php";
    })
}