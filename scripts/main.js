// Side Menu Toggle:
function toggleSideMenu(element) {
  $("#side-menu").toggleClass("showSideMenu");
  $(".side-link-text").toggleClass("showLinkText");
}

function loadData(url, dest) {
  // Declare XMLHttpRequest Object:
  const xhr = new XMLHttpRequest();
  // Open destination with value:
  xhr.open("GET", url);
  // Load back the response data:
  xhr.onload = () => {
    $(dest).html(xhr.response);
  };
  // Sending request:
  xhr.send();
}

function showDetail(element) {
  const showId = element.id;
  loadData(`/details?showId=${showId}`, "#details-dialog");
  $("#details-dialog").addClass("show-details-dialog");
}

function closeDetail() {
  $("#details-dialog").removeClass("show-details-dialog");
}

function goToAccount() {
  loadData('/account', '#app-content')
}

function goHome() {
  loadData('/home', '#app-content')
}
