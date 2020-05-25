





//-----------------------------------------------------------------
function addcategoryvalidate()
{
var addcategory=document.getElementById("newcategoryname").value;
if (addcategory == "") {
    document.getElementById("CategoryName").innerHTML = "Category Name is empty";
    document.getElementById("newcategoryname").style.borderColor = "red";
    return false;

  }

  else if(addcategory.length<3)
{
    document.getElementById("CategoryName").innerHTML = "Category Name is to short";
    document.getElementById("newcategoryname").style.borderColor = "red";
    return false;
}   


else if (!addcategory.match(/^[a-zA-Z]+$/)) 
    {
        document.getElementById("CategoryName").innerHTML = "Category Name only letters are allowed";
        document.getElementById("newcategoryname").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("CategoryName").innerHTML = "";
        document.getElementById("newcategoryname").style.borderColor = "green";
        return true;

    }
}
//-----------------------------------------------------------------------------
function newsubcategoryvalidate()
{
var subcategory=document.getElementById("newsubcategoryname").value;
if (subcategory == "") {
    document.getElementById("SubCategoryName").innerHTML = "Sub Category Name is empty";
    document.getElementById("newsubcategoryname").style.borderColor = "red";
    return false;

  }

  else if(subcategory.length<3)
{
    document.getElementById("SubCategoryName").innerHTML = "Sub Category Name is to short";
    document.getElementById("newsubcategoryname").style.borderColor = "red";
    return false;
}   


else if (!subcategory.match(/^[a-zA-Z]+$/)) 
    {
        document.getElementById("SubCategoryName").innerHTML = "Sub Category Name only letters are allowed";
        document.getElementById("newsubcategoryname").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("SubCategoryName").innerHTML = "";
        document.getElementById("newsubcategoryname").style.borderColor = "green";
        return true;

    }
}
//---------------------------------------------------------------------------------




        function editcategoryvalidate()
{
    var editcategoryname=document.getElementById("editcategoryname").value;
if (editcategoryname == "") {
    document.getElementById("CategoryEdit").innerHTML = " Category Name is empty";
    document.getElementById("editcategoryname").style.borderColor = "red";
    return false;

  }

  else if(editcategoryname.length<3)
{
    document.getElementById("CategoryEdit").innerHTML = " Category Name is to short";
    document.getElementById("editcategoryname").style.borderColor = "red";
    return false;
}   


else if (!editcategoryname.match(/^[a-zA-Z]+$/)) 
    {
        document.getElementById("CategoryEdit").innerHTML = " Category Name only letters are allowed";
        document.getElementById("editcategoryname").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("CategoryEdit").innerHTML = "";
        document.getElementById("editcategoryname").style.borderColor = "green";
        return true;

    }
}
//---------------------
function editsubcategoryvalidate()
{
    var editsubcategoryname=document.getElementById("editsubcategoryname").value;
if (editsubcategoryname == "") {
    document.getElementById("SubCategoryEdit").innerHTML = "Category name is empty";
    document.getElementById("editsubcategoryname").style.borderColor = "red";
    return false;

  }

  else if(editsubcategoryname.length<3)
{
    document.getElementById("SubCategoryEdit").innerHTML = "Category name is to short";
    document.getElementById("editsubcategoryname").style.borderColor = "red";
    return false;
}   


else if (!editsubcategoryname.match(/^[a-zA-Z]+$/)) 
    {
        document.getElementById("SubCategoryEdit").innerHTML = "Category name only letters allowd";
        document.getElementById("editsubcategoryname").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("SubCategoryEdit").innerHTML = "";
        document.getElementById("editsubcategoryname").style.borderColor = "green";
        return true;

    }
}

