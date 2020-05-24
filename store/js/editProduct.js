$(document).ready(function () {
  var orig;
  var color;
  $(document).on("click", ".editor", function () {
    color = $(this).css("background-color");
    $(this).closest("div").attr("contenteditable", "true");
    $(this).focus();
    $(this).addClass("input");
    orig = $(this).text();
    var name = $(this).attr("name");
    /*if (name == "cost" || name == "profit") {
      if ($(this).text().indexOf("L.E")) {
        $(this).html($(this).html().replace(" L.E", ""));
        alert($(this).text());
      }
    }*/
    $(this).keyup(function (e) {
      var test = $(this).text();
      if (name == "name" || name == "description" || name == "color") {
        if (test.match(/^[0-9]+$/)) {
          $(this).removeClass("input");
          $(this).addClass("wr");
        } else {
          $(this).removeClass("wr");
          $(this).addClass("input");
        }
      } else if (
        name == "profit" ||
        name == "cost" ||
        name == "code" ||
        name == "small" ||
        name == "medium" ||
        name == "large" ||
        name == "xlarge" ||
        name == "xxlarge" ||
        name == "xxxlarge" ||
        name == "weight"
      ) {
        if (!test.match(/^[0-9]+$/)) {
          $(this).removeClass("input");
          $(this).addClass("wr");
        } else {
          $(this).removeClass("wr");
          $(this).addClass("input");
        }
      }
    });
  });
  $(document).on("focusout", ".editor", function (event) {
    cell = $(this);
    var row = $(this).closest("tr");
    var product = new FormData();
    var rowIndex = row.index();
    var id,
      pid,
      ni,
      csi,
      pi,
      ci,
      di,
      coi,
      si,
      mi,
      li,
      xli,
      xxli,
      xxxli,
      wi = 0;
    $("#productstable")
      .find("tr:eq(" + 0 + ")")
      .find("th")
      .each(function () {
        if ($(this).text() == "id") id = $(this).index();
        else if ($(this).text() == "detailId") pid = $(this).index();
        else if ($(this).text() == "name") ni = $(this).index();
        else if ($(this).text() == "cost") csi = $(this).index();
        else if ($(this).text() == "profit") pi = $(this).index();
        else if ($(this).text() == "code") ci = $(this).index();
        else if ($(this).text() == "description") di = $(this).index();
        else if ($(this).text() == "color") coi = $(this).index();
        else if ($(this).text() == "SQ") si = $(this).index();
        else if ($(this).text() == "MQ") mi = $(this).index();
        else if ($(this).text() == "LQ") li = $(this).index();
        else if ($(this).text() == "XLQ") xli = $(this).index();
        else if ($(this).text() == "XXLQ") xxli = $(this).index();
        else if ($(this).text() == "XXXLQ") xxxli = $(this).index();
        else if ($(this).text() == "Weight") wi = $(this).index();
      });
    var productid = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + id + ")");
    product.append("productid", productid.text());
    var productdetailid = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + pid + ")");
    product.append("productdetailid", productdetailid.text());
    var pname = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + ni + ")");
    product.append("name", pname.text());
    var cost = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + csi + ")");
    product.append("cost", cost.text());
    var profit = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + pi + ")");
    product.append("profit", profit.text());
    var code = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + ci + ")");
    product.append("code", code.text());
    var description = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + di + ")");
    product.append("description", description.text());
    var color = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + coi + ")");
    product.append("color", color.text());
    var s = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + si + ")");
    product.append("s", s.text());
    var m = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + mi + ")");
    product.append("m", m.text());
    var l = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + li + ")");
    product.append("l", l.text());
    var xl = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + xli + ")");
    product.append("xl", xl.text());
    var xxl = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + xxli + ")");
    product.append("xxl", xxl.text());
    var xxxl = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + xxxli + ")");
    product.append("xxxl", xxxl.text());
    var weight = $("#productst")
      .find("tr:eq(" + rowIndex + ")")
      .find("td:eq(" + wi + ")");
    product.append("weight", weight.text());
    product.append("imageurls", "");
    if ($(this).attr("class").includes("wr"))
      alert("Invalid " + $(this).attr("name"));
    else {
      $.ajax({
        url: "../public/adminproducts.php?action=updateProduct",
        type: "POST",
        data: product,
        processData: false,
        contentType: false,
        success: function (response) {
          cell.removeClass("input");
          cell.html("<div>" + cell.text() + "</div>");
        },
      });
    }
  });
});
