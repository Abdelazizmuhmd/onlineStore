function validateForm() {
    var mailformat = document.getElementById('CustomerEmail').value;
    var p = document.getElementById("CustomerPassword").value;
//---------
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailformat))
{
    return true;
}

else{
     

      alert("You have entered an invalid email address! or empty field")
  return (false)
}
//------------------

    if(p == ""){
        alert("password must be filled out ")
       
        return false;

}


else if (!p.match(/^[A-Za-z0-9]+$/)) 
  {
      alert('password Only alphabets and numbers are allowed');
      return false;
  }
  //-----------------------------
 

}