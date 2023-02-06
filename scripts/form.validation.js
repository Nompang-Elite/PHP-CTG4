let password = document.getElementById("password");
let confirmPassword = document.getElementById("confirmpassword");
let firstName = document.getElementById("firstname");
let btn = document.querySelector("button");
let lastName = document.getElementById("lastname");
let userName = document.getElementById("username");
let date = document.getElementById("date");
let gender = document.getElementById("gender");
let country = document.getElementById("country");
let email = document.getElementById("email");
let textconfirmPassword = document.getElementById("textconfirmpassword");
let textPassword = document.getElementById("textpwd");

function validateEmail() 
{
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
        password.style.border = "";
    }
}

function validateConfirmPassword()
{
    if (confirmPassword.value == password.value && password.value != "")
    {
        textconfirmPassword.innerHTML = "Valid Password!";
        textconfirmPassword.style.color = "green";
        confirmPassword.style.border = "2px solid green";
        completed++;
    }
    else
    {
        textconfirmPassword.innerHTML = "Not match Password!";
        textconfirmPassword.style.color = "red";
        confirmPassword.style.border = "2px solid red";
    }
    if (confirmPassword.value == "") 
    {
        textconfirmPassword.innerHTML = "";
        confirmPassword.style.border = "";
    }
}

function checkform(){
    if (    
            password.value == "" || 
            confirmPassword.value == "" || 
            firstName.value == "" || 
            lastName.value == "" || 
            userName.value == "" || 
            date.value == "" ||
            gender.value == "" ||
            country.value == "" ||
            email.value == ""
        )
    {
        btn.setAttribute("disabled", "");
    }
    else{
        if(password.value != confirmPassword.value){
            btn.setAttribute("disabled", "");
        }
    }
}