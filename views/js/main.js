let settingIcons = document.querySelector("#settings-icons");
let dropMenu = document.querySelector("#drop-menu");
function toggleDisplay(element, display) {
  if (element.style.display === "none") {
    element.style.display = display;
  } else element.style.display = "none";
}
settingIcons.addEventListener("click", (event) => {
  toggleDisplay(dropMenu, "flex");
});
