function loading() {
    setTimeout(function() {
        var loading = document.getElementsByClassName("after")[0];
        if (loading.style.display == "none") {
            loading.style.display = "block";
        } else { 
            loading.style.display = "none";
        }

        var load = document.getElementsByClassName("loadingscreen")[0];
        if (load.style.display == "none") {
            load.style.display = "block";
        } else {
            load.style.display = "none";
        }
    }
    , 2000);
}

function send() {
    // return succes notification

    document.getElementById("message").innerHTML = "Successfully sent <b>" + 
    document.getElementById('amount').value + "</b> emails to <b>" + 
    document.getElementById("email").value + "</b>";

    document.getElementById("success").style.display = "block";
}