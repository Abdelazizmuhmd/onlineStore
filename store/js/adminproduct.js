





//-----------------------------------------------------------------
function addcategoryvalidate()
{
var addcategory=document.getElementById("newcategoryname").value;
if (addcategory == "") {
    alert("Category name must be filled out");
    document.getElementById("newcategoryname").style.borderColor = "red";
    return false;

  }

  else if(addcategory.length<3)
{
    alert("Category name too short");
    document.getElementById("newcategoryname").style.borderColor = "red";
    return false;
}   


if (!addcategory.match(/^[a-zA-Z]+$/)) 
    {
        alert('Category name Only alphabets are allowed');
        document.getElementById("newcategoryname").style.borderColor = "red";
        return false;
    }
}
//-----------------------------------------------------------------------------
function newsubcategoryvalidate()
{
var subcategory=document.getElementById("newsubcategoryname").value;
if (subcategory == "") {
    alert("SubCategory name must be filled out");
    document.getElementById("newsubcategoryname").style.borderColor = "red";
    return false;

  }

  else if(subcategory.length<3)
{
    alert("SubCategory name too short");
    document.getElementById("newsubcategoryname").style.borderColor = "red";
    return false;
}   


if (!subcategory.match(/^[a-zA-Z]+$/)) 
    {
        alert('SubCategory name Only alphabets are allowed');
        document.getElementById("newsubcategoryname").style.borderColor = "red";
        return false;
    }
}
//---------------------------------------------------------------------------------




        function editcategoryvalidate()
{
    var editcategoryname=document.getElementById("editcategoryname").value;
if (editcategoryname == "") {
    alert("Category name must be filled out");
    document.getElementById("editcategoryname").style.borderColor = "red";
    return false;

  }

  else if(editcategoryname.length<3)
{
    alert("Category name too short");
    document.getElementById("editcategoryname").style.borderColor = "red";
    return false;
}   


if (!editcategoryname.match(/^[a-zA-Z]+$/)) 
    {
        alert('Category name Only alphabets are allowed');
        document.getElementById("editcategoryname").style.borderColor = "red";
        return false;
    }
}
//---------------------
function editsubcategoryvalidate()
{
    var editsubcategoryname=document.getElementById("editsubcategoryname").value;
if (editsubcategoryname == "") {
    alert("SubCategory name must be filled out");
    document.getElementById("editsubcategoryname").style.borderColor = "red";
    return false;

  }

  else if(editsubcategoryname.length<3)
{
    alert("SubCategory name too short");
    document.getElementById("editsubcategoryname").style.borderColor = "red";
    return false;
}   


if (!editsubcategoryname.match(/^[a-zA-Z]+$/)) 
    {
        alert('SubCategory name Only alphabets are allowed');
        document.getElementById("editsubcategoryname").style.borderColor = "red";
        return false;
    }
}

