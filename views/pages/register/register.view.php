<!-- // -->
<?php
$header = "Register";
require("views/partials/header.php");
require("views/partials/navbar.php")
?>

<!-- Home contents -->
<main class="w-full h-screen">
    <div class="h-full flex justify-center items-center">
        <div class="flex w-fit shadow-lg rounded-lg">
            <div class="w-[20rem] flex items-center rounded-l-lg px-4 justify-center p-3 bg-[#0b1320] transition-display duration-500 max-md:-translate-x-80 max-md:absolute">
                <img src="/assets/imgs/logo-no-background.png" alt="" width="140">
            </div>
            <div class="flex w-[24rem] p-10 rounded-r-lg">
                <form class="space-y-4 w-full" action="/register">
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white">Register</h5>
                    <div class="flex space-x-4">
                        <div>
                            <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                            <input type="text" name="firstName" id="firstName" placeholder="First Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                            <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                    </div>
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="email" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Username" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email Address" required>
                    </div>
                    <div class="flex space-x-4">
                        <div>
                            <label for="createPass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Create password</label>
                            <input type="password" name="createPass" id="createPass" placeholder="Create Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="confirmPass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirms password</label>
                            <input type="password" name="confirmPass" id="confirmPass" placeholder="Confirms Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                    </div>
                    <button type="submit" class="w-full font-medium rounded-lg px-5 py-2.5 text-center bg-[#01c8ee] text-[#ffffff]">Create Account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Already has account? <a href="/login" class=" hover:underline">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="/views/js//controllers/register.js"></script>
<?php require("views/partials/footer.php") ?>