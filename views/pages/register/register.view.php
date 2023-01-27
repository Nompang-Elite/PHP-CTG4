<?php
function validateUsername(string $name, ):bool
{
    # function to check if username is correct (must be alphanumeric)
    if(ctype_alnum($name)){
        return true;
    }
}
function checkData( string $data):string{
    $data= htmlspecialchars($data);
    $data = trim($data);
    return $data;
}
function validateEmail($email)
{
    if (filter_var(checkdata($email), FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }

}

$firstName="";
$lastName = "";
$password = "";
$phoneNumber = "";
$city = "";
$date = "";
$password = "";
$gender = "";
$genderError = "";
$confirmPassword = "";
$confirmPasswordError = "";
$dateError = "";
$firstNameError ="";
$lastNameError ="";
$emailError ="";
$passwordError ="";
$phoneNumberError = "";
$cityError = "";
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
        $confirmPassword = "Please enter your confirmation password";
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

<!-- // -->
<?php
$header = "Home";
require("views/partials/header.php");
require("views/partials/navbar.php");
?>

<!-- Home contents -->
<main class="h-screen">
    <section class="flex h-auto ">
       <div class="flex w-full items-center justify-center lg:py-0 ">
           <div class="flex felx-row rounded-lg justify-center h-full w-full">
               <div class="flex items-center bg-black justify-center flex-col w-5/6  md:space-y-6 sm:p-8 max-[640px]:hidden">
                   <div class="flex items-center justify-center">
                       <img src="image/image_2023-01-26_19-59-35.png" alt="" class="w-1/4" >
                   </div>
               </div>
               <div class="flex bg-white items-center justify-center flex-col p-6 w-1/2 space-y-4 md:space-y-6 sm:p-8  max-[640px]:w-full">
                    <h1 class="text-xl font-bold leading-tight text-center">
                       Please Register Here!
                    </h1>
                    <form class="space-y-4 md:space-y-6 w-full" action="#">
                        <div class="flex mb-6">
                            <div class=" w-full md:w-1/2 px-2 mb-6 md:mb-0">
                               <label for="countries"  class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                               <input type="text" name="firstName" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                    placeholder="first name " required="">
                               <small><?php echo $firstNameError; ?></small>
                            </div>
                            <div class=" w-full md:w-1/2 px-2 mb-6 md:mb-0">
                               <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                               <input type="text" name="lastName" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                               placeholder=" last name " required="">
                               <small><?php echo $lastNameError; ?></small>
                            </div>
                        </div>
                        <div class=" md:w-1/1 px-2" style="margin-top: -1rem;">
                           <label for="gender" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                           <select id="gender" name="gender" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                               <option selected disabled>Choose your gender</option>
                               <option value="US">Male</option>
                               <option value="CA">Female</option>
                           </select>
                           <small><?php echo $genderError; ?></small>
                        </div>
                        <div class="flex mb-6" style="margin-top: 10px;">
                           <div class="w-full md:w-1/2 px-2 mb-6 md:mb-0">
                               <label for="date" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Date of birth</label>
                               <input type="date" name="date" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                               placeholder="date " required="">
                               <small><?php echo $dateError; ?></small>
                           </div>
                           <div class="  w-full md:w-1/2 px-2 mb-6 md:mb-0">
                               <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">country</label>
                               <select id="countries" name="city" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                   <option selected disabled>Choose a country</option>
                                   <option value="US">Cambodia</option>
                                   <option value="CA">Canada</option>
                                   <option value="FR">France</option>
                                   <option value="DE">Germany</option>
                               </select>
                               <small><?php echo $cityError; ?></small>
                           </div>
                        </div>
                        <div class=" md:w-1/1 px-2" style="margin-top: 10px;">
                           <label for="number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Number</label>
                           <input type="text" name="phoneNumber" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                           placeholder="phone number " required=""> 
                           <small><?php echo $phoneNumberError; ?></small> 
                        </div>
                        <div class=" md:w-1/1 px-2" style="margin-top: 10px;">
                           <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                           <input type="email" name="email" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                           placeholder="Input your email " required="">
                           <small><?php echo $emailError; ?></small>
                        </div>
                        <div class="flex mb-6" style="margin-top: 10px;">
                           <div class=" w-full md:w-1/2 px-2 mb-6 md:mb-0">
                               <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                               <input type="password" name="password" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                               placeholder="password " required="">
                               <small><?php echo $passwordError; ?></small>
                           </div>
                           <div class="  w-full md:w-1/2 px-2 mb-6 md:mb-0">
                               <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                               <input type="password" name="comfirmPassword" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                               placeholder="Confirm password " required="">
                               <small><?php echo $confirmPasswordError; ?></small>
                           </div>
                        </div>
                        <button type="submit"
                               class="w-full rounded-lg text-sm p-1.5 text-center bg-blue-500">Register
                        </button>
                    </form>
               </div>
           </div>
       </div>
   </section> 
</main>
<?php
require("views/partials/footer.php");
?>
<!-- // -->


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