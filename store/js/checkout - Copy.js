function validateForm() {
    var p = document.getElementById("password").value;
    var mailformat = document.getElementById('email').value;
    var first = document.getElementById("firstName").value;
    var last = document.getElementById("lastName").value;
        // -------------------------------------------------

     //FristName
     if (fristName == "") {
        alert("FristName must be filled out");
        document.getElementById("fristName").style.borderColor = "red";
        return false;
    
      }
    
      else if(fristName.length<5)
    {
        alert("name id too short");
        document.getElementById("name").style.borderColor = "red";
        return false;
    }
    
  
    if (!fristName.match(/^[a-zA-Z]+$/)) 
        {
            alert('FristName Only alphabets are allowed');
            return false;
        }
    // --------------------------------------------------
        // LastName

        if (lastName == "") {
            alert("lastName must be filled out");
            document.getElementById("lastName").style.borderColor = "red";
            return false;
        
          }
        
          else if(lastName.length<5)
        {
            alert("LastName id too short");
            document.getElementById("lastName").style.borderColor = "red";
            return false;
        }
        
      
        if (!lastName.match(/^[a-zA-Z]+$/)) 
            {
                alert('LastName Only alphabets are allowed');
                return false;
            }
        // -------------------------------------------------

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailformat))
    {
    }
   
    else{
          document.getElementById("email").style.borderColor = "red";
  
          alert("You have entered an invalid email address! or empty field")
      return (false)
    }
   
    // -------------------------------------------------
    if(p == ""){
        alert("password must be filled out ")
        document.getElementById("password").style.borderColor = "red";
        return (false)

}


else if(p.length<5)
{
      alert("password is too short");
  document.getElementById("password").style.borderColor = "red";
  return (false)   
}else if (!p.match(/^[A-Za-z0-9]+$/)) 
  {
      alert('username Only alphabets and numbers are allowed');
      return false;
  }



}
