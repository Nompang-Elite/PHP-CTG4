<?php
// Get value
$emialError = "";
$passwordError = "";
if ($_SERVER['REQUEST'] == "POST"){
    // email-----------
    if (empty($_POST['email'])){
        // if user don't complete the email-----
        $emialError = "Please insert your email";
    }else{
        // validate input email-----
        
        if (isset($_POST['email'])){
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
             {
                $email = $_POST['email'];
             }
             else{
                $emialError ="email must contain @. Ex: name@gmail.com" ;
             }
        }

    }
    // password-----------
    if (empty($_POST['password'])){
        // if user don't complete the password-----
        $passwordError = "Please insert your email";
    }else{
        // validate input password--------
        if (isset($_POST['email'])){
            //  passowrd input should have 8 or more than 8 charaters 
            $passwordParttern = '/[a-zA-Z0-9]{8,}/';
            if (preg_match_all($passwordParttern, $_POST['password']) == 1){
                $password = $_POST['password'];
            }
            else{
                $passwordError = "You should complete a strong password";
            }
        }

    }
}


