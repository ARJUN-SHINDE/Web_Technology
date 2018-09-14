function validatepass(pass) {
    if (pass.length < 8) {
        return false;
    } else {
        return true;
    }
}

function validateemail(email) {
    if ((email.indexOf('@') == -1) || (email.indexOf('.') == -1)) {
        return false;
    } else {
        return true;
    }
}

function setpage() {
    if (localStorage.getItem('screenname') != null && localStorage.getItem('profilepicture') != null) {
        return true;
    } else {
        return false;
    }
}

function checkemailconsistancy(email) {
    var val;
    $.ajax({
        type: "POST",
        async: false,
        url: "./email.php",
        data: { 'email': email },
        success: function(data) {
            val = data;
        }
    });
    if (val > 0) {
        return false;
    } else {
        return true;
    }
}

function screennameconsistancy(name) {
    var val;
    $.ajax({
        type: "POST",
        async: false,
        url: "./screenname.php",
        data: { 'screenname': name },
        success: function(data) {
            val = data;
        }
    });
    if (val > 0) {
        return false;
    } else {
        return true;
    }
}