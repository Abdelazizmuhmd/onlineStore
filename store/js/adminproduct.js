





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
function validate()
{




    var productName = document.getElementById("productName").value;
    var productCode = document.getElementById("productCode").value;
    var productProfit = document.getElementById("productProfit").value;
    var productDescription = document.getElementById("productDescription").value;
    var productWeight = document.getElementById("productWeight").value;
    var productCost = document.getElementById("productCost").value;
    //----------------------------------------------------
    if (productName == "") {
        document.getElementById("Name").innerHTML = "Name is empty";
        document.getElementById("productName").style.borderColor = "red";
        return false;

    } else if (productName.length < 3) {
        document.getElementById("Name").innerHTML = "Name is to short";
        document.getElementById("productName").style.borderColor = "red";
        return false;
    }


    else if (!productName.match(/^[a-zA-Z]+$/)) {
        document.getElementById("Name").innerHTML = "Name must be Letters only";

        document.getElementById("productName").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("Name").innerHTML = "";
        document.getElementById("productName").style.borderColor = "Green";


    }
    //---------------------
    //code
    if (productCode == "") {
        document.getElementById("Code").innerHTML = "Code is empty";
        document.getElementById("productCode").style.borderColor = "red";
        return false;

    } else if (productCode.length < 1) {
        document.getElementById("Code").innerHTML = "Code is to short";
        document.getElementById("productCode").style.borderColor = "red";
        return false;
    }


   else if (!productCode.match(/^\d*\.?\d*$/)) {
        document.getElementById("Code").innerHTML = "Code must be  numbers only";
        return false;
    }
    else
    {
        document.getElementById("Code").innerHTML = "";
        document.getElementById("productCode").style.borderColor = "Green";


    }
    //-----------------------------
    //weight
    if (productWeight == "") {
        document.getElementById("Weight ").innerHTML = "Weight  is empty";
        document.getElementById("productWeight").style.borderColor = "red";
        return false;

    } else if (productWeight.length < 1) {
        document.getElementById("Weight ").innerHTML = "Weight  is to short";
        document.getElementById("productWeight").style.borderColor = "red";
        return false;
    }


    else if (!productWeight.match(/^\d*\.?\d*$/)) {
        document.getElementById("Weight ").innerHTML = "Weight  must be numbers only";
        return false;
    }
    else
    {
        document.getElementById("Weight").innerHTML = "";
        document.getElementById("productWeight").style.borderColor = "Green";


    }
    //-------------------------------------------
    //cost
    if (productCost == "") {
        document.getElementById("Cost").innerHTML = "Cost  is empty";
        document.getElementById("productCost").style.borderColor = "red";
        return false;

    } else if (productCost.length < 1) {
        document.getElementById("Cost").innerHTML = "Cost  is to short";
        document.getElementById("productCost").style.borderColor = "red";
        return false;
    }


    else if (!productCost.match(/^\d*\.?\d*$/)) {
        document.getElementById("Cost").innerHTML = "Cost only numbers are allowed";
        return false;
    }
    else
    {
        document.getElementById("Cost").innerHTML = "";
        document.getElementById("productCost").style.borderColor = "Green";


    }
    //---------------------------------------
    //description
    productDescription
    if (productDescription == "") {
        document.getElementById("Description").innerHTML = "Description is empty";
        document.getElementById("productDescription").style.borderColor = "red";
        return false;

    } else if (productDescription.length < 1) {
        document.getElementById("Description").innerHTML = "Description is to Short";
        document.getElementById("productDescription").style.borderColor = "red";
        return false;
    }



   else if (!productDescription.match(/^[A-Za-z0-9 ]+$/)) {
        document.getElementById("Description").innerHTML = "Description only letters and number are allowed";
        return false;
    }
    else
    {
        document.getElementById("Description").innerHTML = "";
        document.getElementById("productDescription").style.borderColor = "Green";


    }
    //--------------------
    //profit
    if (productProfit == "") {
        document.getElementById("Profit").innerHTML = "Profit is empty";
        document.getElementById("productProfit").style.borderColor = "red";
        return false;

    } else if (productProfit.length < 1) {
        document.getElementById("Profit").innerHTML = "Profit is Short";
        document.getElementById("productProfit").style.borderColor = "red";
        return false;
    }


    else if (!productProfit.match(/^\d*\.?\d*$/)) {
        document.getElementById("Profit").innerHTML = "Profit only numbers are allowed";
        document.getElementById("productProfit").style.borderColor = "red";

        return false;
    }
    else
    {
        document.getElementById("Profit").innerHTML = "";
        document.getElementById("productProfit").style.borderColor = "Green";


    }
//-------------------------------------------------------------------------------------------------------------

    var productColor = document.getElementById("productColor").value;

    //-----------------------------------------
    if (productColor == "") {

        document.getElementById("Color ").innerHTML = "Color  is empty";
        document.getElementById("productColor").style.borderColor = "red";
        return false;

    } else if (productColor.length < 1) {
        document.getElementById("Color ").innerHTML = "Color  is to short";
        document.getElementById("productColor").style.borderColor = "red";
        return false;
    }


   else if (!productColor.match(/^[a-zA-Z]+$/)) {
        document.getElementById("Color ").innerHTML = "Color  only letters are allowed";
        document.getElementById("productColor").style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById("Color").innerHTML = "";
        document.getElementById("productColor").style.borderColor = "Green";


    }

}

