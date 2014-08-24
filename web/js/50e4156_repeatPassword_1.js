window.onload = function () {
    document.getElementsByClassName("password1").onchange = validatePassword;
    document.getElementById("password2").onchange = validatePassword;
};

function validatePassword(){
	var pass2=document.getElementById("password2").value;
	var pass1=document.getElementsByClassName("password1");
	pass1=pass1[0].value;

	if(pass1!=pass2)
	    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
	else
	    document.getElementById("password2").setCustomValidity('');
}