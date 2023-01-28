// Main JS files
const namePattern =
  /^[><?@+'`~^%&\*\[\]\{\}!#|\\\"$';,:;=/\(\),\-\w\s+]{4,30}$/;
const passPattern = /^[><?@+'`~^%&\*\[\]\{\}!#|\\\"$';,:;=/\(\),\-\w\s+]{8,}$/;
const emailPattern = /^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/;
// FUNCTIONS
function validate(value, pattern) {
  // Check and return if match:
  return pattern.test(value) && value !== null && value !== "";
}
// Display toggle for the hidden menu
$("#menu-icon").click((e) => {
  console.log(e);
  $("#menu-content").toggleClass("active-menu");
  $("#menu-content").css("height", "100%");
});
