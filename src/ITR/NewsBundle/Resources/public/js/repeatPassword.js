$(document).ready(function(){
    $('#regform').submit(function(){
        var pass1=$('#itr_newsbundle_user_user_password').val();
        var pass2=$('#password2').val();
        if (pass1 !== pass2){
            document.getElementById("password2").validationMessage;
            document.getElementById("passconf").style.display="block";
            return false;
        } else {
            document.getElementById("passconf").style.display="none";
        }
    });
});