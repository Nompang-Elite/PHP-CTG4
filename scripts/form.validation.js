function validateEmail() 
{
    let email = document.getElementById("email");
    let text = document.getElementById("text");
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if (email.value.match(emailPattern)) {
        text.innerHTML = "Invalid Email!";
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
        email.style.border = "";
    }

}

function validatePassword() 
{
    let password = document.getElementById("password");
    let textPassword = document.getElementById("textpwd");
    let passPattern = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    if (password.value.match(passPattern)) {
        textPassword.innerHTML = "Valid Password!";
        textPassword.style.color = "green";
        password.style.border = "2px solid green";
        completed++;
    } 
    else 
    {
        textPassword.innerHTML = "Invalid Password!";
        textPassword.style.color = "red";
        password.style.border = "2px solid red";
    }
    if (password.value == "") 
    {
        textPassword.innerHTML = "";
        // password.style.border = "";
    }
}

function validateConfirmPassword()
{
    let password = document.getElementById("password");
    let textconfirmPassword = document.getElementById("textconfirmpassword");
    let confirmPassword = document.getElementById("confirmpassword");
    if (confirmPassword.value == password.value && password.value != "")
    {
        textconfirmPassword.innerHTML = "Valid Password!";
        textconfirmPassword.style.color = "green";
        confirmPassword.style.border = "2px solid green";
        completed++;
    }
    else
    {
        textconfirmPassword.innerHTML = "Invalid Password!";
        textconfirmPassword.style.color = "red";
        confirmPassword.style.border = "2px solid red";
    }
    if (confirmPassword.value == "") 
    {
        textconfirmPassword.innerHTML = "Valid Confirm_Password";
        textconfirmPassword.style.color = "green"
        password.style.border = "2px solid green";
        confirmPassword.style.border = "2px solid green";
    }
}