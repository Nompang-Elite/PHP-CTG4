function validateEmail()
    {
        let form = document.getElementById("login-form");
        let email = document.getElementById("email");
        let text= document.getElementById("text");
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        
        if (email.value.match(emailPattern)){
            form.classList.add("valid");
            form.classList.remove("invalid")
            text.innerHTML="Valid email!";
            text.style.color="green";
            email.style.border = "2px solid green";

        }else{
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML="Invalid email!";
            text.style.color="red";
            email.style.border = "2px solid red";
        }
        if(email==""){
            form.classList.remove("valid");
            form.classList.remove("invalid");
            text.innerHTML="";
            
        }
        
    }
function validPassoword()
    {
        let form = document.getElementById("login-form");
        let password = document.getElementById("pass");
        let textPassword= document.getElementById("textPassword");
        if(password.value=="")
        { 
            form.classList.add("valid");
            form.classList.remove("invalid")
            textPassword.innerHTML="Please! Enter password.";
            textPassword.style.color="red";
            password.style.border = "2px solid red";
            
        }else{
            form.classList.remove("valid");
            form.classList.remove("invalid");
            textPassword.innerHTML="";
            password.style.border = "none";
            
        }
    }