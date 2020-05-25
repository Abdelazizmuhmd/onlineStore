function validateForm() {
    var mailformat = document.getElementById('CustomerEmail').value;
    var p = document.getElementById("CustomerPassword").value;
//---------
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailformat))
{
 document.getElementById("mail").innerHTML = "";

}

else{
     

 document.getElementById("mail").innerHTML = "Mail in correct";
 return false;
}

//----------------------------------------------
if(p == ""){
 document.getElementById("pass").innerHTML = "Password IS empty";

 return false;

 }


 else if (!p.match(/^[A-Za-z0-9]+$/)) 
{
document.getElementById("pass").innerHTML = "Pasword must be in letters or number Only";
return false;
}
 else
{
document.getElementById("pass").innerHTML = "";
return true;


}


 

}