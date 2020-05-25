function validateForm() {
    var p = document.getElementById("password").value;
    var mailformat = document.getElementById('email').value;
    var first = document.getElementById("firstName").value;
    var last = document.getElementById("lastName").value;
        // -------------------------------------------------

     //FristName
     if (first == "") {
        
        document.getElementById("Fname").innerHTML = "First Name is Empty";

       
        return false;
       
      }
    
      else if(first.length<2)
    {
        document.getElementById("Fname").innerHTML = "Frist Name is to Small";

        return false;
    }
    
  
   else if (!first.match(/^[a-zA-Z]+$/)) 
        {
            document.getElementById("Fname").innerHTML = "Frist Name must be letters Only";

            return false;
        }
    else
        {
            document.getElementById("Fname").innerHTML = "";


        }

    // --------------------------------------------------
        // LastName

        if (last == "") {
            document.getElementById("Lname").innerHTML = "Last Name is empty";
        
            return false;
        
          }
        
          else if(last.length<2)
        {
            document.getElementById("Lname").innerHTML = "LAst Name is small";
           
            return false;
        }
        
      
       else if (!last.match(/^[a-zA-Z]+$/)) 
            {
                document.getElementById("Lname").innerHTML = "Last Name must be in letters Only";
                return false;
            }
            else
            {
                document.getElementById("Lname").innerHTML = "";
    
    
            }
   
   
    // -------------------------------------------------
   
       // -------------------------------------------------

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


        else if(p.length<5)
    {
    document.getElementById("pass").innerHTML = "Password is to small";
 
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
