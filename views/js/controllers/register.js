
// Function:
function validateInput(element) {
  // Input values validation:
  if (validate(element.val(), namePattern)) {
    element.removeClass("wrong");
    element.addClass("correct");
  } else {
    element.addClass("wrong");
  }
}

$("#register-form").keypress((e) => {
  // First name
  validateInput($("#firstName"));
  // Last Name
  validateInput($("#lastName"));
  // Create Pass
  validateInput($("#createPass"));
  // Email
  validateInput($("#email"));
  // Username
  validateInput($("#username"));
});
