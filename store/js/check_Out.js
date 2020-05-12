function validate()
{

var first = document.getElementById("firstName").value;
var last = document.getElementById("lastName").value;
var city = document.getElementById("city").value;
var phone = document.getElementById("phoneNumber").value;
var mailformat = document.getElementById('checkout_email').value;
var adress = document.getElementById("adress").value;
var apartment = document.getElementById("apartment").value;
var code = document.getElementById("checkout_reduction_code").value;
//---------------------------------------------------------------------
   //FristName
   if (first == "") {
        
    alert("FristName must be filled out");
    document.getElementById("firstName").style.borderColor = "red";
   
    return false;
   
  }

  else if(first.length<2)
{
    alert("FirstName too short");
    document.getElementById("firstName").style.borderColor = "red";
    return false;
}


if (!first.match(/^[a-zA-Z]+$/)) 
    {
        alert('FristName Only alphabets are allowed');
        document.getElementById("firstName").style.borderColor = "red";
        return false;
    }
// --------------------------------------------------
    // LastName

    if (last == "") {
        alert("lastName must be filled out");
        document.getElementById("lastName").style.borderColor = "red";
        return false;
    
      }
    
      else if(last.length<2)
    {
        alert("LastName is too short");
        document.getElementById("lastName").style.borderColor = "red";
       
        return false;
    }
    
  
    if (!last.match(/^[a-zA-Z]+$/)) 
        {
            alert('LastName Only alphabets are allowed');
            document.getElementById("lastName").style.borderColor = "red";
            return false;
        }

//--------------------------------------------------------------------
//-------------------------------------------------
if(adress== ""){
    alert("adress  must be filled out ")
    document.getElementById("adress").style.borderColor = "red";
   
    return (false)

}


else if(adress.length<5)
{
  alert("adress  is too short");
  document.getElementById("adress").style.borderColor = "red";

return (false)   
}
else if (!adress .match(/^[A-Za-z0-9]+$/)) 
{
  alert('adress Only alphabets and numbers are allowed');
  document.getElementById("adress").style.borderColor = "red";
  return false;
}
//-------------------------------------------------------------------
if(apartment  == ""){
    alert("apartment must be filled out ")
    document.getElementById("apartment").style.borderColor = "red";
   
    return (false)

}


else if(apartment.length<5)
{
  alert("apartmentis too short");
  document.getElementById("apartment").style.borderColor = "red";

return (false)   
}
else if (!apartment.match(/^[A-Za-z0-9]+$/)) 
{
  alert('apartment Only alphabets and numbers are allowed');
  document.getElementById("apartment").style.borderColor = "red";
  return false;
}

//---------------------------------------------
if (city == "") {
        
    alert("city must be filled out");
    document.getElementById("city").style.borderColor = "red";
   
    return false;
   
  }

  else if(city.length<2)
{
    alert("city too short");
    document.getElementById("city").style.borderColor = "red";
    return false;
}


if (!city.match(/^[a-zA-Z]+$/)) 
    {
        alert('city Only alphabets are allowed');
        document.getElementById("city").style.borderColor = "red";
        return false;
    }


//--------------------------------------------------
if (phone == "") {
        
    alert("phone must be filled out");
    document.getElementById("phoneNumber").style.borderColor = "red";
    return false;
   
  }

  else if(phone.length<11)
{
    alert("phone too short");
    document.getElementById("phoneNumber").style.borderColor = "red";
    return false;
}
if (!phone.match('^[0-9]+$')) 
    {
        alert('Phone  Only Numbers are allowed');
        document.getElementById("phoneNumber").style.borderColor = "red";
        return false;
    }

//--------------------------------------------------------------

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

//-----------------------------------------------
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailformat))
{
    return true;
}

else{
     

      alert("You have entered an invalid email address! or empty field")
      document.getElementById("checkout_email").style.borderColor = "red";
  return (false)
}
//---------------------------------


}