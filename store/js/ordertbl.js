$(document).ready(function () {
  $("#stat").change(function () {
    var selected = $("#stat").children("option:selected").val();
    var indx = 0;
    $("#Display")
      .find("tr:eq(" + 0 + ")")
      .find("th")
      .each(function () {
        if ($(this).text() == "Status") indx = $(this).index();
      });
    //$("#Display tr").each(function () {});
    $("#Display tr").each(function () {
      // for every row
      var found = "false";
      var x = $(this).find("td:eq(" + indx + ")"); // search in selected column
      if (
        x.text().toLowerCase().indexOf(selected.toLowerCase()) >= 0 //check if input exist in table
      ) {
        found = "true";
      }

      if (found == "true") {
        // if found show containing row
        $(this).show();
      } else {
        $(this).hide(); // if not hide row
        $("#must").show();
      }
    });
  });
});
