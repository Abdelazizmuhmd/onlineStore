$(document).ready(function () {
  arr = [];
  op = [];
  $(".decider option").each(function () {
    arr.push($(this).val());
  });
  $(".decider").change(function () {
    decider = $(this).find(":selected").text();
    decide = $(this).find(":selected");
      deciderimg=decider+"1";
      //images
    $(this)
      .parent()
      .parent()
      .parent()
      .parent()
      .children()
      .each(function () {
        if (arr.includes($(this).attr("id"))) {
          if (decider == $(this).attr("id")) $(this).css("display", "block");
          else $(this).css("display", "none");
          $(".decider").val(decider);
        }
      });
      //dropdowns
    $(this)
      .parent()
      .parent()
      .parent()
      .parent()
      .parent()
      .parent()
      .children()
      .children()
      .each(function () {
        if (arr.includes($(this).attr("value"))) {
          if (decider == $(this).attr("value")) $(this).css("display", "block");
          else $(this).css("display", "none");
          $(".decider").val(decider);
        }
      });
      
 
       var x = document.getElementsByClassName(deciderimg);
       for(var i=0; i<x.length; i++)
        {
          if(x[i].getAttribute("src")==""){
           x[i].src=x[i].getAttribute("data-src");
            }
        }
       showSlides(1);
      
  });
    
   
});
