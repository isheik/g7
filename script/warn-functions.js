// NAMES

function warnRealName(field,output) {
    // message = "test message";

    // if (message != undefined)
    //     document.getElementById(output).innerHTML = message;

    document.getElementById(output).innerHTML = "Real Name";
}

function warnUsername(field,output) {
    // var message = "";

    // if (message != undefined)
    //     document.getElementById(output).innerHTML = message;

    document.getElementById(output).innerHTML = "User Name";
}


// EMAIL

function warnEmail(field,output) {
    // message = "test message";

    // if (message != undefined)
    //     document.getElementById(output).innerHTML = message;

    document.getElementById(output).innerHTML = "Email";
}

function warnREmail(field1,field2,output) {
    field1 = document.getElementById(field1).value;
    field2 = document.getElementById(field2).value;

    if (field1 != field2)
        document.getElementById(output).innerHTML = "E-mail addresses do not match";
    else
        document.getElementById(output).innerHTML = "";
}

// PASSWORD

function warnPassword(field,output) {
    // message = "test message";

    // if (message != undefined)
    //     document.getElementById(output).innerHTML = message;

    document.getElementById(output).innerHTML = "Password";
}

function warnRePassword(field1,field2,output) {
    field1 = document.getElementById(field1).value;
    field2 = document.getElementById(field2).value;

    if (field1 != field2)
        document.getElementById(output).innerHTML = "Passwords do not match";
    else
        document.getElementById(output).innerHTML = "";
}
