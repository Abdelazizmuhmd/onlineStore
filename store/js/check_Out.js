function validate()
{

var first = document.getElementById("firstName").value;
var last = document.getElementById("lastName").value;
var city = document.getElementById("city").value;
var phone = document.getElementById("phoneNumber").value;
var mailformat = document.getElementById('checkout_email').value;
var adress = document.getElementById("adress").value;
var apartment = document.getElementById("apartment").value;
//  var code = document.getElementById("code").value;

//---------------------------------------------------------------------
   //FristName
   if (first == "") {
        
    document.getElementById("Fname").innerHTML = "First Name is Empty";


    document.getElementById("firstName").style.borderColor = "red";
   
    return false;
   
  }

  else if(first.length<2)
{
  document.getElementById("Fname").innerHTML = "Frist Name is to Small";
    document.getElementById("firstName").style.borderColor = "red";
    return false;
}


else if (!first.match(/^[a-zA-Z]+$/)) 
    {
      document.getElementById("Fname").innerHTML = "Frist Name must be letters Only";
      document.getElementById("firstName").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("Fname").innerHTML = "";
        document.getElementById("firstName").style.borderColor = "green";



    }

// --------------------------------------------------
    // LastName

    if (last == "") {
      document.getElementById("Lname").innerHTML = "Last Name is empty";

        document.getElementById("lastName").style.borderColor = "red";
        return false;
    
      }
    
      else if(last.length<2)
    {
      document.getElementById("Lname").innerHTML = "LAst Name is small";
        document.getElementById("lastName").style.borderColor = "red";
       
        return false;
    }
    
  
    if (!last.match(/^[a-zA-Z]+$/)) 
        {
          document.getElementById("Lname").innerHTML = "Last Name must be in letters Only";
            document.getElementById("lastName").style.borderColor = "red";
            return false;
        }
        else
        {
            document.getElementById("Lname").innerHTML = "";
            document.getElementById("lastName").style.borderColor = "green";



        }


//--------------------------------------------------------------------
//-------------------------------------------------
if(adress== ""){
  document.getElementById("Adress").innerHTML = "Adress is empty";
    document.getElementById("adress").style.borderColor = "red";
   
    return (false)

}


else if(adress.length<4)
{
  document.getElementById("Adress").innerHTML = "Adress is  to small";
  document.getElementById("adress").style.borderColor = "red";

return (false)   
}
else if (!adress .match(/^[A-Za-z0-9 ]+$/)) 
{
  document.getElementById("Adress").innerHTML = "Adress Number and Letters are only allowed";

  document.getElementById("adress").style.borderColor = "red";
  return false;
}
else
{
    document.getElementById("Adress").innerHTML = "";
    document.getElementById("adress").style.borderColor = "green";



}
//-------------------------------------------------------------------
if(apartment  == ""){
  document.getElementById("Apartment").innerHTML = "Apartment is empty";
    document.getElementById("apartment").style.borderColor = "red";
   
    return (false)

}


else if(apartment.length<1)
{
  document.getElementById("Apartment").innerHTML = "Apartment is to Small";
  document.getElementById("apartment").style.borderColor = "red";

return (false)   
}
else if (!apartment.match(/^[A-Za-z0-9 ]+$/)) 
{
  document.getElementById("Apartment").innerHTML = "Apartment letters and number are only allowed";
  document.getElementById("apartment").style.borderColor = "red";
  return false;
}

else
{
    document.getElementById("Apartment").innerHTML = "";
    document.getElementById("apartment").style.borderColor = "green";



}
//---------------------------------------------
if (city == "") {
        
  document.getElementById("City").innerHTML = "City is empty";
    document.getElementById("city").style.borderColor = "red";
   
    return false;
   
  }

  else if(city.length<2)
{
  document.getElementById("City").innerHTML = "City is So Small";
    document.getElementById("city").style.borderColor = "red";
    return false;
}


else if (!city.match(/^[a-zA-Z]+$/)) 
    {
        document.getElementById("City").innerHTML = "City is only alphabets are allowed";

        document.getElementById("city").style.borderColor = "red";
        return false;
    }else
    {
        document.getElementById("City").innerHTML = "";
        document.getElementById("city").style.borderColor = "green";

    
    
    }


//--------------------------------------------------
if (phone == "") {
        
  document.getElementById("Phone").innerHTML = "Phone is empty";
  document.getElementById("phoneNumber").style.borderColor = "red";
    return false;
   
  }

  else if(phone.length<11)
{
  document.getElementById("Phone").innerHTML = "Phone is to Small";
  document.getElementById("phoneNumber").style.borderColor = "red";
    return false;
}
else if (!phone.match('^[0-9]+$')) 
    {
      document.getElementById("Phone").innerHTML = "Phone are only numbers allowed";
      document.getElementById("phoneNumber").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("Phone").innerHTML = "";
        document.getElementById("phoneNumber").style.borderColor = "Green";

    
    }

//--------------------------------------------------------------
/*
if (code == "") {
        

  }

else if(code.length<5)
{
  alert("Code too short");
  document.getElementById("checkout_reduction_code").style.borderColor = "red";

return (false)   
}
else if (!code.match(/^[A-Za-z0-9]+$/)) 
{
  alert('Code Only alphabets and numbers are allowed');
  document.getElementById("checkout_reduction_code").style.borderColor = "red";
  return false;
}
*/
//-----------------------------------------------
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailformat))
{
 document.getElementById("mail").innerHTML = "";
 document.getElementById("checkout_email").style.borderColor = "Green";

 return true;

}

else{
     

 document.getElementById("mail").innerHTML = "Mail in correct";
 document.getElementById("checkout_email").style.borderColor = "red";

 return false;
}

//---------------------------------


}