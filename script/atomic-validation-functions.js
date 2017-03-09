function isASCII(field){
	return /^[\x00-\x7F]*$/.test(field);
}

function min5Chars(field) {
    return field.length >= 5;
}

function max128Chars(field) {
    return field.length <= 128;
}

function max256Chars() {
    field.length <= 256;
}

function max5000Chars() {
    field.length <= 5000;
}

function isNotBlank(field){
    return (field.length > 0);
}

function isValidUsername(field) {
    return !(/[^a-zA-Z\-\_0-9]/.test(field));
}

function isValidEmail(field) {
    return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})/.test(field) ;
}
