<?php
function validateUsername(string $name, ):bool
{
    # function to check if username is correct (must be alphanumeric)
    if(ctype_alnum($name)){
        return true;
    }
}

# function to change all data to strings
function checkData( string $data):string{
    $data= htmlspecialchars($data);
    $data = trim($data);
    return $data;
}

# Function to check email is correct 
function validateEmail($email)
{
    if (filter_var(checkdata($email), FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }

}


#Variable

$firstName = $lastName = $password = $phoneNumber = $city = $date = $gender = $email = $confirmPassword = "";
$firstNameError = $lastNameError = $passwordError = $phoneNumberError = $phoneNumberError = "";
$cityError = $dateError = $genderError = $emailError = $confirmPasswordError = "";
$completed=0;
$valid = false;


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    #Please enter your first name
   if (empty($_POST["firstName"])){
        $firstNameError = "Please enter your first name";
   }
   else{
        if (isset($_POST["firstName"])){
            # First nane should contain only letters and numbers
            if (!validateUsername($_POST["firstName"])){
                $firstNameError = "Your first name should contain only letters and numbers";
            }else{
            $firstName= $_POST["firstName"];
            $completed+=1;
            }
        }
    }

    # Please enter your last name
   if (empty($_POST["lastName"])){
        $lastNameError = "Please enter your last name";
   }
   else{
        if (isset($_POST["lastName"])){
            #Function to check if last name is not correct
            if (!validateUsername($_POST["lastName"])){
                $lastNameError = "Your last name should contain only letters and numbers";
            }else{
            $lastName= $_POST["lastName"];
            $completed+=1;
            }
        }
    }

    # Please enter password
    if (empty($_POST["password"])){
        $passwordError= "Please enter your password";
    }else{
        if (isset($_POST["password"])){
        
            $passwordParttern = "/[a-zA-Z0-9]{8,}/";
            if (preg_match_all($passwordParttern, $_POST["password"])==1){
                $password= $_POST["password"];
                $completed+=1;
            }else{
                $passwordError = "Password must have 8 characters";
            }
        }
    }

    #Please enter confirm password
    if (empty($_POST["confirmPassword"])){
        $confirmPasswordError = "Please enter confirm password";
    }else{
        if (isset($_POST["confirmPassword"])){
            if ($_POST["confirmPassword"]== $_POST["password"]){
                $confirmPassword = $_POST["confirmPassword"];
                $completed+=1;
            }else{
                $confirmPasswordError = "Your password is incorrect";
            }
        }
          
    }

    # Please enter email address
    if (empty($_POST["email"])){
        $emailError= "Please enter your email address";
    }else{
        if (isset($_POST["email"])){
            if (validateEmail($_POST["email"])){
                $email = $_POST["email"];
                $completed+=1;
            }else{
                $emailError = "Email must contain @";
            }
        }
    }

    # Please enter phone number
    if (empty($_POST["phoneNumber"])){
        $phoneNumberError = "Please enter a phone number";
    }else{
        $phoneNumber= $_POST["phoneNumber"];
        $completed+=1;
    }

    #Please enter city
    if (empty($_POST["city"])){
        $cityError= "Please enter a city";
    }else{
        $city = $_POST["city"];
        $completed+=1;
    }

    # Please enter date
    if (empty($_POST["date"])){
        $dateError = "Please enter a date";
    }else{
        $completed+=1;
        $date = $_POST["date"];
    }
    
    # Please enter gender
    if (empty($_POST["gender"])){
        $genderError = "Please select gender";
    }else{
        if ($_POST["gender"]=="male"){
            $gender = "Male";
            $completed+=1;
        }else{
            $gender = "Female";
            $completed+=1;
        }
    }
    if ($completed==9){
        $valid = true;
    }
}
?>

    <!-- Form for test -->
    <form action="" method="post">
        <input type="text" name="firstName" placeholder="Enter your first name"><br>
        <small class="text-red-500"> <?php echo $firstNameError; ?></small>
        <input type="text" name="lastName" placeholder="Enter your last name"><br>
        <small class="text-red-500"> <?php echo $lastNameError; ?></small>
        <input type="password" name="password" placeholder="Enter password"><br>
        <small class="text-red-500"> <?php echo $passwordError; ?></small>
        <input type="password" name="confirmPassword" placeholder="Confirm password"><br>
        <small class="text-red-500"> <?php echo $confirmPasswordError; ?></small>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <small class="text-red-500"> <?php echo $emailError; ?></small>
        <input type="number" name="phoneNumber" placeholder="Enter your phone number"><br>
        <div>
            <label>
                <input type="radio" value="female" name="gender" checked />Female
            </label>
            <label>
                <input type="radio" value="male" name="gender" />Male
            </label>
            <small class="text-red-500"> <?php echo $genderError; ?></small>
        </div>
        <input type="text" name="city" placeholder="Enter your city"><br>
        <small class="text-red-500"> <?php echo $cityError; ?></small>
        <input type="date" name="date" placeholder="Enter your birthday">
        <small class=" text-red-500"> <?php echo $dateError; ?></small>
        <button type="submit">submit</button>
    </form>




<?php
if ($valid):
?>
<p><?php echo $firstName ;?></p>
<p><?php echo $lastName ;?></p>
<p><?php echo $email ;?></p>
<p><?php echo $password ;?></p>
<p><?php echo $confirmPassword ;?></p>
<p><?php echo $city ;?></p>
<p><?php echo $date ;?></p>
<p><?php echo $gender ;?></p>

<?php endif;
?>
