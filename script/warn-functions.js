function warnUsername(field,output){
	message = validateUsername(field);

	if (message != undefined)
		document.getElementById(output).innerHTML = message;
}

function validateUsername(field){
	if (!isASCII(field))
		return "Only alpha characters are allowed";

	if (!isNotBlank(field))
		return "Username cannot be blank";

	return "";
}

function isASCII(field){

}

function isNotBlank(field){

}