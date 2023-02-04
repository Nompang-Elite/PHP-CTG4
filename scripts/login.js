function validateEmail()
    {
        let form = document.getElementById("login-form");
        let email = document.getElementById("email").value;
        let text= document.getElementById("text");
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        
        if (email.match(emailPattern)){
            form.classList.add("valid");
            form.classList.remove("invalid")
            text.innerHTML="Valid email!";
            text.style.color="green";
            completed++;
        }else{
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML="Invalid email!";
            text.style.color="red";
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
        let password = document.getElementById("pass").value;
        let textPassword= document.getElementById("textPassword");
        // let passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        if(password=="")
        { 
            form.classList.add("valid");
            form.classList.remove("invalid")
            textPassword.innerHTML="Please! Enter password.";
            textPassword.style.color="red";
        }else{
            form.classList.remove("valid");
            form.classList.remove("invalid");
            textPassword.innerHTML="";
            
        }
    }