$(document).ready(function () {
  var orig;
  $(document).on("click", ".editor", function () {
    $(this).closest("div").attr("contenteditable", "true");
    $(this).focus();
    $(this).addClass("input");
    orig = $(this).text();
    var name = $(this).attr("name");
    if (name == "price") $(this).text(orig.replace(" L.E", ""));
    $(this).keyup(function (e) {
      var test = $(this).text();
      if (name == "name" || name == "description" || name == "color") {
        if (test.match(/^[0-9]+$/)) {
          $(this).css("background-color", "#da5555");
        } else {
          $(this).css("background-color", "white");
        }
      } else if (
        name == "price" ||
        name == "code" ||
        name == "small" ||
        name == "medium" ||
        name == "large" ||
        name == "xlarge" ||
        name == "xxlarge" ||
        name == "xxxlarge"
      ) {
        if (!test.match(/^[0-9]+$/)) {
          $(this).css("background-color", "#da5555");
        } else {
          $(this).css("background-color", "white");
        }
      }
    });
  });
  $(document).on("focusout", ".editor", function (event) {
    var row = $(this).closest("tr");
    var rowIndex = row.index();
    var ni,
      pi,
      ci,
      di,
      coi,
      si,
      mi,
      li,
      xli,
      xxli,
      xxxli = 0;
    $("#productstable")
      .find("tr:eq(" + 0 + ")")
      .find("th")
      .each(function () {
        if ($(this).text() == "name") ni = $(this).index();
        else if ($(this).text() == "price") pi = $(this).index();
        else if ($(this).text() == "code") ci = $(this).index();
        else if ($(this).text() == "description") di = $(this).index();
        else if ($(this).text() == "color") coi = $(this).index();
        else if ($(this).text() == "SQ") si = $(this).index();
        else if ($(this).text() == "MQ") mi = $(this).index();
        else if ($(this).text() == "LQ") li = $(this).index();
        else if ($(this).text() == "XLQ") xli = $(this).index();
        else if ($(this).text() == "XXLQ") xxli = $(this).index();
        else if ($(this).text() == "XXXLQ") xxxli = $(this).index();
      });
    var c = $("#productstable")
      .find("tr:eq(" + rowIndex + 1 + ")")
      .find("td:eq(" + di + ")");
    alert(rowIndex);
    alert(di);
    alert(c.html());
  });
});
