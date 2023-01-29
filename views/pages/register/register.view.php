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
            <div class="flex h-screen bg-white items-center justify-center flex-col shadow-md border-l-2 w-[36rem] min-w-[20rem] max-sm:w-full">
                <form action="/register" method="post" class="flex flex-col items-center gap-[0.6rem] w-9/12">
                    <legend class="text-2xl font-bold">Register</legend>
                    <!-- Name-->
                    <div class="flex w-full gap-[0.6rem]">
                        <input type="text" name="firstName" max="40" min="4" class="border-2 p-1.5 rounded-md w-full" placeholder="First Name" required>
                        <input type="text" name="lastName" max="40" min="4" class="border-2 p-1.5 rounded-md w-full" placeholder="Last Name" required>
                    </div>
                    <!-- Username -->
                    <div class="flex w-full gap-[0.6rem]">

                        <input type="text" name="username" max="40" min="4" class="border-2 p-1.5 rounded-md w-full" placeholder="Username" required>
                    </div>

                    <!-- Email -->
                    <div class="flex w-full gap-[0.6rem]">
                        <input type="text" name="email" max="40" min="4" class="border-2 p-1.5 rounded-md w-full" placeholder="Email Address" required>
                    </div>
                    <!-- Password -->
                    <div class="flex flex-col w-full gap-[0.6rem]">
                        <input type="password" name="passwordCreate" max="40" min="4" class="border-2 p-1.5 rounded-md w-full" placeholder="Create Password" required>
                        <input type="password" name="passwordConfirm" max="40" min="4" class="border-2 p-1.5 rounded-md w-full" placeholder="Confirms Password" required>
                    </div>
                    <!-- Gender and Country -->
                    <div class="flex w-full gap-[0.6rem]">
                        <select name="gender" class="border-2 p-1.5 rounded-md w-full" placeholder="First Name" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                        <select name="country" class="border-2 p-1.5 rounded-md w-full" placeholder="Last Name" required>
                            <option value="" disabled selected>Country</option>
                            <option value="KH">Cambodia</option>
                            <option value="US">United State</option>
                            <option value="UK">United Kingdom</option>
                        </select>
                    </div>
                    <!-- Birth Date -->
                    <div class="flex w-full">
                        <input type="date" name="birthDate" class="border-2 p-1.5 rounded-md w-full" required>
                    </div>
                    <!-- Link -->
                    <p>Already have account? <a href="/login" class="text-[#01c8ee]">Login</a> </p>
                    <button class="btn p-2 rounded-md w-full border-2 border-[#01c8ee] text-[#01c8ee] hover:bg-[#01c8ee] hover:text-white transition duration-400">Register</button>

                    <hr class="w-4/12">
                    <a href="/" class="text-[#01c8ee]">Back to Home</a>

                </form>
            </div>
        </div>
    </div>
</main>
<script src="/views/js//controllers/register.js"></script>