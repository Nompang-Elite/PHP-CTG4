function validateEmail() 
{
  let email = document.getElementById("email");
  let text = document.getElementById("text");
  let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  if (email.value.match(emailPattern)) {
    text.innerHTML = "Please Enter Valid Email!";
    text.style.color = "green";
    email.style.border = "2px solid green";
    completed++;
  } else {
    text.innerHTML = "Invalid Email!";
    text.style.color = "red";
    email.style.border = "2px solid red";
  }
  if (email.value == "") {
    text.innerHTML = "";
  }
}

function validatePassword() 
{
  let password = document.getElementById("password");
  let textPassword = document.getElementById("textpwd");
  let passPattern =
    /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
  if (password.value.match(passPattern)) {
    textPassword.innerHTML = "Valid Password!";
    textPassword.style.color = "green";
    password.style.border = "2px solid green";
    completed++;
  } else {
    textPassword.innerHTML = "Please Enter Valid Password!";
    textPassword.style.color = "red";
    password.style.border = "2px solid red";
  }
  if (password.value == "") {
    textPassword.innerHTML = "";
  }
}
