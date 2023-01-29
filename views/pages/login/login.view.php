<?php
$header = "Login";
require("views/partials/header.php");
require("views/partials/navbar.php")
?>

<!-- Login page -->
<main class="w-full h-screen">
    <div class="h-full flex justify-center items-center">
        <div class="flex w-fit shadow-lg rounded-lg">
            <div class="w-[20rem] flex items-center rounded-l-lg px-4 justify-center p-3 bg-[#0b1320] transition-display duration-500 max-md:-translate-x-80 max-md:absolute">
                <img src="/assets/imgs/logo-no-background.png" alt="" width="140">
            </div>
            <div class="flex w-[24rem] p-10 rounded-r-lg">
                <form class="space-y-6 w-full" action="/login"  method="post">
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white">Sign in</h5>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email Address" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                        </div>
                        <a href="#" class="ml-auto text-sm hover:underline ">Lost Password?</a>
                    </div>
                    <button type="submit" class="w-full font-medium rounded-lg px-5 py-2.5 text-center bg-[#01c8ee] text-[#ffffff]">Login to your account</button>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                        Not registered? <a href="/register" class=" hover:underline">Create account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require("views/partials/footer.php") ?>