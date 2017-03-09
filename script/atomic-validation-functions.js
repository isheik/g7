function isASCII(field){
	return /^[\x00-\x7F]*$/.test(field);
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
