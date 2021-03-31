// JavaScript Document
function formValidation()  
{   
var teacher_pass = document.registration.teacher_pass;  


if(passid_validation(teacher_pass,6,12))  
{  
}
return false;  

function passid_validation(teacher_pass,mx,my)  
{  
var passid_len = stu_pass.value.length;  
if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
{  
alert("Password length Should be between "+mx+" to "+my);  
teacher_pass.focus();  
return false;  
}  
return true;  
}  
}
