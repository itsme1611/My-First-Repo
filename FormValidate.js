function fnameField(){

    var fname = ""+document.RegForm.fname.value;
    if(fname=="")
    {
        document.getElementById('msg1').innerHTML="Field cannot be empty!";
    }
    if(Number.isInteger(parseInt(fname)))
    {
        document.getElementById('msg1').innerHTML="cannot enter numeric value!";
    }
}

function lnameField(){

    var lname = ""+document.RegForm.lname.value;
    if(lname=="")
    {
        document.getElementById('msg2').innerHTML="Field cannot be empty!";
    }
    if(Number.isInteger(parseInt(lname)))
    {
        document.getElementById('msg2').innerHTML="cannot enter numeric value!";
    }
}

function isPassEmpty(){

    var pswd = document.RegForm.pswd.value;
    if(pswd=="")
    {
        document.getElementById('msg5').innerHTML="Field cannot be empty!";
    }
}

function isCPassEmpty(){

    var cpswd = document.RegForm.cpswd.value;
    var pswd = document.RegForm.pswd.value;
    if(cpswd=="" && cpswd.length==0){
        document.getElementById('msg6').innerHTML="Field cannot be empty!";
    }
    if(cpswd==pswd){
        document.getElementById('msg6').innerHTML="Password not matches!";
    }
}

function checkMail(){

    var email = document.RegForm.email.value;
    var atpos = email.indexOf('@');
    var dotpos = email.lastIndexOf('.');

    if(email==""){
        document.getElementById('msg3').innerHTML="Field cannot be empty!";
    }
    
    if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
        document.getElementById('msg3').innerHTML="Entered Invalid mail-id!";
    }
}

function checkPhone(){

    var phone = document.RegForm.phone.value;

    if(phone.length>10){

        document.getElementById('msg4').innerHTML="size is grater than 10!";
    }
    if(phone.length<10){
        document.getElementById('msg4').innerHTML="size is less than 10!";
    }
    if(phone==""){
        document.getElementById('msg4').innerHTML="Field cannot be empty!";
    }
}

function loginValidate(){

    var uer = document.loginform.uer.value;
    var pass= document.loginform.pass.value;

    if(user=="" && pass==""){
        document.getElementById('errmsg').innerHTML="Fields cannot be empty!";
    }
}