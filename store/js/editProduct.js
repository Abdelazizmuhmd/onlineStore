$(document).ready(function () {
  var orig;
  $(document).on("click", ".editor", function () {
    $(this).closest("div").attr("contenteditable", "true");
    $(this).focus();
    $(this).addClass("input");
    $(this).keyup(function (e) {
      var test = $(this).text();
      if (!test.match(/^[0-9]+$/)) {
        // if input value is not a number
        $(this).removeClass("input"); //remove class input
        $(this).addClass("wr"); //add class wrong
      } else {
        $(this).removeClass("wr"); // remove class wrong
        $(this).addClass("input"); // add class input
      }
    });
  });
});
