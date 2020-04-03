function add() {
  $("#title-wrapper").addClass("background");
  $("table").addClass("table");
  $("ul").addClass("list-group");
  $("li").addClass("list-group-item");
}
function reset() {
  $("#title").removeClass("font");
  $("#title-wrapper").removeClass("background");
  $("table").removeClass("table");
  $("ul").removeClass("list-group");
  $("li").removeClass("list-group-item");
}
function toggle() {
  $("#title").toggleClass("font");
}

// 1 div, 1 link && 1 tabel aanpassen!!!
