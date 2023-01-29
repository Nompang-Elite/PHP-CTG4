// Main JS files
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
