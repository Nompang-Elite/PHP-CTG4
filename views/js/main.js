// Main JS files

// FUNCTIONS
function validateInput(value, pattern) {
  // Validating the input value by using Regex:
  if (value.match(pattern)) {
    return true;
  } else return false;
}