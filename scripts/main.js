// Functions

// Toggle Menu:
function toggleMenu() {
  $("#side-menu").toggleClass("show-side-menu");
}
function showDetails(id){
  const xhr = new XMLHttpRequest();
  xhr.open("GET", `/details?id=${id.id}`, true)
  xhr.onload = ()=>{
    xhr.response;
  }
  xhr.send();
  $("#details-dialog").toggleClass("show-details-dialog");
}
