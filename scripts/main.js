// Side Menu Toggle:
function toggleSideMenu(element) {
  $("#side-menu").toggleClass("showSideMenu");
  $(".side-link-text").toggleClass("showLinkText");
}

function loadData(method, url, dest, formData = null) {
  // Declare XMLHttpRequest Object:
  const xhr = new XMLHttpRequest();
  // Open destination with value:
  xhr.open(method, url);
  // Load back the response data:
  xhr.onload = () => {
    $(dest).html(xhr.response);
  };
  $(dest).html(
    '<div class="tenor-gif-embed" data-postid="19421012" data-share-method="host" data-aspect-ratio="1.83908" data-width="100%"><a href="https://tenor.com/view/loading-gif-19421012">Loading GIF</a>from <a href="https://tenor.com/search/loading-gifs">Loading GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>'
  );
  // Sending request:
  xhr.send(formData);
}

function showDetail(element) {
  const showId = element.id;
  loadData("GET", `/details?showId=${showId}`, "#details-dialog");
  $("#details-dialog").addClass("show-details-dialog");
}

function closeDetail() {
  $("#details-dialog").removeClass("show-details-dialog");
}

function goToAccount() {
  loadData("GET", "/account", "#app-content");
}

function goHome() {
  loadData("GET", "/home", "#app-content");
}

function goToSearch() {
  loadData("GET", "/search", "#app-content");
}

function uploadImg() {
  // FormData for the image upload:
  const formData = new FormData();
  console.log(formData.append("image", $("#img").prop("files")[0]));
  loadData("POST", "/addShow", "#app-content", formData);
}
