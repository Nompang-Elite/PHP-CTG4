<!-- // -->
<?php
$header = "Register";
require("views/partials/header.php");
?>

<!-- Home contents -->
<main class="h-screen">
    <div class="flex h-screen w-full items-center justify-center lg:py-0 ">
        <div class="flex felx-row rounded-lg justify-center h-full w-full">
            <!-- Left side -->
            <div class="flex justify-center items-center bg-[#0b1320] w-full max-sm:hidden">
                <!-- Contents -->
                <img src="../../assets/imgs/logo-no-background.png" alt="logo" class="px-4 w-26 h-14 my-10">

            </div>
            <!-- Register Form -->
            <div class="flex bg-white items-center justify-center flex-col shadow-md border-l-2 w-[36rem] min-w-[20rem] max-sm:w-full">
                <form action="/register" method="post" id="login-form" class="w-full flex flex-col items-center gap-[1rem]">
                    <legend class="text-3xl font-bold">Register</legend>
                    <!-- Name Input -->
                    <div class="flex gap-[1rem] max-w-8/10 ">
                        <input type="text" name="firstName" id="firstName" class="rounded-md p-2 text-center border-2 w-full" placeholder="First Name ">
                        <input type="text" name="lastName" id="lastName" class="rounded-md p-2 text-center border-2 w-full" placeholder=" last name ">
                    </div>
                    <!-- Username Input -->
                    <input type="text" name="username" id="username" class="max-w-8/10  rounded-md p-2 text-center border-2 w-full" placeholder="Phone Number">
                    <!-- Email Input -->
                    <input type="email" name="email" id="email" class="max-w-8/10  rounded-md p-2 text-center border-2 w-full" placeholder="Email Address">
                    <!-- Password Input -->
                    <input type="password" name="createPass" id="createPass" class="max-w-8/10  rounded-md p-2 text-center border-2 w-full" placeholder="Create Password">
                    <input type="password" name="comfirmPass" id="comfirmPass" class="max-w-8/10  rounded-md p-2 text-center border-2 w-full" placeholder="Confirm Password ">
                    <!-- Gender Input -->
                    <select id="gender" name="gender" class="max-w-8/10 rounded-md p-2 text-center border-2 w-full">
                        <option selected disabled>Gender</option>
                        <option value="US">Male</option>
                        <option value="CA">Female</option>
                    </select>
                    <!-- Date Input -->
                    <div class="flex gap-[1rem] w-full max-w-8/10">
                        <input type="date" name="birthDate" id="birthDate" class="w-full rounded-md p-2 text-center border-2">
                        <!-- Country Input -->
                        <select id="" name="city" class="w-full rounded-md p-2 text-center border-2">
                            <option selected disabled>Country</option>
                            <option value="KH">Cambodia</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="max-w-8/10 rounded-md p-2 text-center border-2 border-[#01c8ee] w-full text-[#01c8ee] hover:bg-[#01c8ee] hover:text-white transition duration-400">Register
                    </button>
                    <hr class="w-4/12">

                    <span>Already have account? <a href="/login" class="text-[#01c8ee]">Login</a></span>
                    <a href="/" class="text-[#01c8ee]">Back to Home</a>

                </form>
            </div>
        </div>
    </div>
</main>