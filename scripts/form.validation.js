function validateEmailRegister()
    {
        let form = document.getElementById("regis-form");
        let email = document.getElementById("email");
        let text= document.getElementById("text");
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        
        if (email.value.match(emailPattern)){
            form.classList.add("valid");
            form.classList.remove("invalid")
            text.innerHTML="Valid email!";
            text.style.color="green";
            email.style.border = "2px solid green";
            completed++;
        }else{
            form.classList.remove("valid");
            form.classList.add("invalid");
            text.innerHTML="Please Enter Valid Email!";
            email.style.border = "2px solid red";
            text.style.color="red";
        }
        if(email==""){
            form.classList.remove("valid");
            form.classList.remove("invalid");
            text.innerHTML="";
            
        }
        
    }