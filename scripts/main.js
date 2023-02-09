// Functions

// Toggle Menu:
function toggleMenu() {
  // Toggle class on side menu:
  $("#side-menu").toggleClass("show-side-menu");
}

function openShowDetail(element) {
  // Add class to detail dialog:
  $("#show-details").addClass("open-detail");
}

function closeShowDetail(element) {
  // Remove class to detail dialog:
  $("#show-details").removeClass("open-detail");
}

function getShowDetail(element) {
  const showId = element.id;
  // Declare XMLHttpRequest Object:
  const xhr = new XMLHttpRequest();
  // Open destination with value:
  xhr.open("GET", `/details?showId=${showId}`);
  // Load back the response data:
  xhr.onload = () => {
    $("#show-details").html(xhr.response);
  };
  // Sending request:
  xhr.send();
  // Open detail dialog:
  openShowDetail();
}
