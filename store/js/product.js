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
    showSlides(1);
       document.getElementById("green1").src =document.getElementById("green1").getAttribute("data-src");
 
      
      
  });
});
