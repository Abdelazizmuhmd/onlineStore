$(document).ready(function () {
  $(document).on("click", ".editor", function () {
    $(this).closest("div").attr("contenteditable", "true");
    $(this).focus();
    $(this).addClass("input");
  });
});
