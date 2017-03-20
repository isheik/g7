// HELPER FUNCTIONS

function $(id){
    var element = document.getElementById(id);
    return element;
}


// ATOMIC VALIDATION FUNCTIONS

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
    return /^[a-zA-Z\-_0-9]+$/.test(str);
}

function isValidEmail(str) {
    return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})/.test(str);
}


// NAMES
/**
 * @param field   the element of first/last name text field
 * @param output  the element of error message output field
 */
function warnRealName(field,output) {
    // Clear the current error text in HTML;
    $(output).innerHTML = "";

    // If username is invalid, get an error message
    var message = validateRealname($(field).value);

    if (message != undefined)
        $(output).innerHTML = message;
}

/**
 * @param username  the String of first/last name to be validated
 *
 * @return message  the String of error message if invalid, or null if valid
 */
function validateRealname(username) {
    var minLength = 0;
    var maxLength = 128;
    var message = null;

    if (!isLengthInRange(username, minLength, maxLength))
        message = "Name has to be equal to or less than 128 characters";

    return message;
}

/**
 * @param field   the element of username text field
 * @param output  the element of error message output field
 */
function warnUsername(field,output) {
    // Clear the current error text in HTML;
    $(output).innerHTML = "";

    // If username is invalid, get an error message
    var message = validateUsername($(field).value);

    if (message != undefined)
        $(output).innerHTML = message;
}

/**
 * @param username  the String of username to be validated
 *
 * @return message  the String of error message if invalid, or null if valid
 */
function validateUsername(username) {
    var minLength = 1;
    var maxLength = 128;
    var message = null;

    if (!isNotBlank(username))
        message = "Please enter your username";
    else if (!isValidUsername(username))
        message = "Only alphanumeric characters, - and _ are allowed";
    else if (!isLengthInRange(username, minLength, maxLength))
        message = "Username has to be equal to or less than 128 characters";
    
    return message;
}


// EMAIL
/**
 * @param field   the element of email text field
 * @param output  the element of error message output field
 */
function warnEmail(field,output) {
    // Clear the current error text in HTML;
    $(output).innerHTML = "";

    // If username is invalid, get an error message
    var message = validateEmail($(field).value);

    if (message != undefined)
        $(output).innerHTML = message;
}

/**
 * @param email     the String of email to be validated
 *
 * @return message  the String of error message if invalid, or null if valid
 */
function validateEmail(email) {
    var minLength = 1;
    var maxLength = 128;
    var message = null;

    if (!isNotBlank(email))
        message = "Please enter your email address";
    else if (!isASCII(email))
        message = "Only alphanumeric characters, $, #, -, _, . and @ are allowed";
    else if (!isValidEmail(email))
        message = "Need to take email format (e.g. abcde@gmail.com)";
    else if (!isLengthInRange(email, minLength, maxLength))
        message = "Email address has to be equal to or less than 128 characters";

    return message;
}

/**
 * @param field1  the element of original email text field
 * @param field2  the element of confirmation email text field
 * @param output  the element of error message output field
 */
function warnREmail(field1,field2,output) {
    // Clear the current error text in HTML;
    $(output).innerHTML = "";

    // If username is invalid, get an error message
    var message = validateREmail($(field1).value, $(field2).value);

    if (message != undefined)
        $(output).innerHTML = message;
}

/**
 * @param original      the String of original email to be validated
 * @param confirmation  the String of confirmation email to be validated
 * 
 * @return message  the String of error message if invalid, or null if valid
 */
function validateREmail(original,confirmation) {
    var message = null;

    if (!isNotBlank(confirmation))
        message = "Please enter confirmation email address";
    else if (original != confirmation)
        message = "E-mail addresses do not match";

    return message;
}


// PASSWORD
/**
 * @param field   the element of password text field
 * @param output  the element of error message output field
 */
function warnPassword(field,output) {
    // Clear the current error text in HTML;
    $(output).innerHTML = "";

    // If username is invalid, get an error message
    var message = validatePassword($(field).value);

    // If the error message is defined, put it to HTML
    if (message != undefined)
        $(output).innerHTML = message;
}

/**
 * @param password  the String of password to be validated
 *
 * @return message  the String of error message if invalid, or null if valid
 */
function validatePassword(password) {
    var minLength = 5;
    var maxLength = 128;
    var message = null;

    if (!isNotBlank(password))
        message = "Please enter your password";
    else if (!isASCII(password))
        message = "Only alphanumeric characters, $, #, - and _ are allowed";
    else if (!isLengthInRange(password, minLength, maxLength))
        message = "password has to be between 5 and 128 characters";

    return message;
}

/**
 * @param field1  the element of original password text field
 * @param field2  the element of confirmation password text field
 * @param output  the element of error message output field
 */
function warnRePassword(field1,field2,output) {
    // Clear the current error text in HTML;
    $(output).innerHTML = "";

    // If username is invalid, get an error message
    var message = validateRePassword($(field1).value, $(field2).value);

    if (message != undefined)
        $(output).innerHTML = message;
}

/**
 * @param original      the String of original password to be validated
 * @param confirmation  the String of confirmation password to be validated
 * 
 * @return message  the String of error message if invalid, or null if valid
 */
function validateRePassword(original,confirmation) {
    var message = null;

    if (!isNotBlank(confirmation))
        message = "Please enter confirmation password";
    else if (original != confirmation)
        message = "Password do not match";

    return message;
}

// Response
/**
 * @param field   the element of response text field
 * @param output  the element of error message output field
 */
function warnResponse(field, output) {
    // Clear the current error text in HTML;
    $(output).innerHTML = "";

    // If username is invalid, get an error message
    var message = validateResponse($(field).value);

    if (message != undefined)
        $(output).innerHTML = message;
}

/**
 * @param response  the String of response to be validated
 * 
 * @return message  the String of error message if invalid, or null if valid
 */
function validateResponse(response) {
    var minLength = 1;
    var maxLength = 5000;
    var message = null;

    if (!isNotBlank(response))
        message = "Please enter your response";
    else if (!isLengthInRange(response, minLength, maxLength))
        message = "Response text has to be equal to or less than 5000 characters";

    return message;
}

