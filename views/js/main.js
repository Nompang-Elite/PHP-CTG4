// Main JS files

// FUNCTIONS
function validateInput(value, pattern) {
  // Validating the input value by using Regex:
  if (value.match(pattern)) {
    return true;
  } else return false;
}

// Display toggle for the hidden menu
$("#menu-icon").click((e) => {
  console.log(e);
  $("#menu-content").toggleClass("active-menu");
  $("#menu-content").css("height", "100%");
  
});
