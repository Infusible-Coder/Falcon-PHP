// JavaScript Document
function formValidation()  
{   
var stu_pass = document.registration.stu_pass;  


if(passid_validation(stu_pass,6,12))  
{  
}
return false;  

function passid_validation(stu_pass,mx,my)  
{  
var passid_len = stu_pass.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
alert("Password length Should be between "+mx+" to "+my);  
stu_pass.focus();  
return false;  
}  
return true;  
}  
}


