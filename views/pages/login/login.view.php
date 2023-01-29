<?php
$header = "Login";
require("views/partials/header.php");
?>

<!-- Login page -->
<main class="w-full h-screen flex justify-center items-center bg-white">
    <div class="flex h-full w-full">
        <div class="flex justify-center items-center bg-[#0b1320] w-full max-sm:hidden">
            <!-- Contents -->
            <img src="../../assets/imgs/logo-no-background.png" alt="logo" class="px-4 w-26 h-14 my-10">

        </div>
        <form action="/login" method="post" id="login-form" class="flex flex-col gap-[1rem] shadow-md justify-center items-center border-l-2 w-[36rem] min-w-[20rem] max-sm:w-full">
            <legend class="text-3xl font-bold">Login</legend>
            <input type="email" name="email" placeholder="Email address" class="p-2 rounded-md max-w-8/10 w-full border-2" required>
            <input type="password" name="pass" placeholder="Password" class="p-2 rounded-md max-w-8/10 w-full border-2" required>
            <a href="#" class="text-[#01c8ee]">Forget password?</a>
            <button class="btn p-2 rounded-md max-w-8/10 w-full border-2 border-[#01c8ee] text-[#01c8ee] hover:bg-[#01c8ee] hover:text-white transition duration-400">Login</button>
            <hr class="w-4/12">
            <span>Don't have account? <a href="/register" class="text-[#01c8ee]">Register</a></span>
            <a href="/" class="text-[#01c8ee]">Back to Home</a>
        </form>
    </div>
</main>