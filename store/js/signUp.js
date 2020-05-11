function validateForm() {
    var p = document.getElementById("password").value;
    var mailformat = document.getElementById('email').value;
    var first = document.getElementById("firstName").value;
    var last = document.getElementById("lastName").value;
        // -------------------------------------------------

     //FristName
     if (first == "") {
        
        alert("FristName must be filled out");
       
        return false;
       
      }
    
      else if(first.length<2)
    {
        alert("FirstName too short");
        return false;
    }
    
  
    if (!first.match(/^[a-zA-Z]+$/)) 
        {
            alert('FristName Only alphabets are allowed');
            return false;
        }
    // --------------------------------------------------
        // LastName

        if (last == "") {
            alert("lastName must be filled out");
        
            return false;
        
          }
        
          else if(last.length<2)
        {
            alert("LastName is too short");
           
            return false;
        }
        
      
        if (!last.match(/^[a-zA-Z]+$/)) 
            {
                alert('LastName Only alphabets are allowed');
                return false;
            }
   
   
    // -------------------------------------------------
    if(p == ""){
        alert("password must be filled out ")
       
        return (false)

}


else if(p.length<5)
{
      alert("password is too short");
 
  return (false)   
}else if (!p.match(/^[A-Za-z0-9]+$/)) 
  {
      alert('password Only alphabets and numbers are allowed');
      return false;
  }

       // -------------------------------------------------

       if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailformat))
       {
           return true;
       }
      
       else{
            
     
             alert("You have entered an invalid email address! or empty field")
         return (false)
       }
       



}
