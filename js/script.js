function validateForm() {
	var formValidName = document.forms["form"]["name"].value;
	var formValidEmail = document.forms["form"]["email"].value;
	var formValidMessage = document.forms["form"]["message"].value;
	if (formValidName == ""){
		alert("You must to enter your name");
		return false;
	} else if (formValidEmail == "") {
		alert("You must enter an Email Address");
	} else if (formValidMessage == "") {
		alert("You must enter a message");
	} 
	return alert("Thank you for your information");
}