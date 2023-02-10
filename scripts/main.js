// Side Menu Toggle:
function toggleSideMenu(element) {
  $("#side-menu").toggleClass("showSideMenu");
  $(".side-link-text").toggleClass("showLinkText");
}

function showDetail(element) {
  loadShowData(element);
  $("#details-dialog").addClass("show-details-dialog");
}
function closeDetail() {
  $("#details-dialog").removeClass("show-details-dialog");
}

function loadShowData(element) {
  const showId = element.id;
  // Declare XMLHttpRequest Object:
  const xhr = new XMLHttpRequest();
  // Open destination with value:
  xhr.open("GET", `/details?showId=${showId}`);
  // Load back the response data:
  xhr.onload = () => {
    $("#details-dialog").html(xhr.response);
  };
  // Sending request:
  xhr.send();
}
