function validateEmail() {
    let form = document.getElementById("regis-form");
    let email = document.getElementById("email");
    let text = document.getElementById("text");
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email.value.match(emailPattern)) {
        form.classList.add("valid");
        form.classList.remove("invalid")
        text.innerHTML = "Please Enter Valid Email!";
        text.style.color = "green";
        email.style.border = "2px solid green";
        completed++;
    } else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "Invalid Email!";
        text.style.color = "red";
        email.style.border = "2px solid red";
    }
    if (email.value == "") {
        form.classList.remove("valid");
        form.classList.remove("invalid");
        text.innerHTML = "";
    }

}
function validatePassword()
{
    let form = document.getElementById("regis-form");
    let password = document.getElementById("password");
    let textPassword = document.getElementById("textpwd");
    let passPattern = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    if (password.value.match(passPattern)) 
    {
        form.classList.remove("invalid");
        form.classList.add("valid");
        textPassword.innerHTML = "Valid Password!";
        textPassword.style.color = "green";
        password.style.border = "2px solid green";
        completed++;
    }
    else 
    {
        form.classList.remove("invalid");
        form.classList.add("valid");
        textPassword.innerHTML = "Please Enter Valid Password!";
        textPassword.style.color = "red";
        password.style.border = "2px solid red";
    }
    if(password.value == "")
    {
        form.classList.remove("valid");
        form.classList.remove("invalid");
        textPassword.innerHTML = "";
    }
}