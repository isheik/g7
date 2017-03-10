function isASCII(str){
    for(var i = 0; i < str.length; i++)
        // change 127 to 255 for extended ASCII
        if(str.charCodeAt(i) > 127)
            return false;
    return true;
}

function isLengthInRange(str, min, max) {
    // range is inclusive
    return min <= str.length && str.length <= max;
}

function isNotBlank(str){
    return str != null && str.length != 0;
}

function isValidUsername(str) {
    // only allow alphanumeric characters, '-' and '_'
    return /^[a-zA-Z\-_0-9]+/.test(str);
}

function isValidEmail(str) {
    return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})/.test(str);
}
