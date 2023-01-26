<?php
$header = "Login";
require("views/partials/header.php");
?>

<!-- Login page -->
<main class="w-full h-screen flex justify-center items-center bg-white">
    <div class="flex h-full w-full">
        <div class="w-4/6">
            <!-- Contents -->
            <h1>Content</h1>
        </div>
        <form action="/" method="post" id="login-form" class="flex flex-col gap-[1rem] shadow-md justify-center border-l-2 items-center w-2/6 ">
            <legend class="text-3xl font-bold">Login</legend>
            <span class="text-xs">Welcome to the login page, please input your info.</span>
            <input type="email" name="email" placeholder="Email address" class="p-2 rounded-md w-80 border-2">
            <input type="password" name="pass" placeholder="Password" class="p-2 rounded-md w-80 border-2">
            <a href="#" class="text-[#01c8ee]">Forget password?</a>
            <button class="btn p-2 rounded-md w-80 border-2 border-[#01c8ee] text-[#01c8ee]">Login</button>
            <hr class="w-4/12">
            <span>Don't have account? <a href="#" class="text-[#01c8ee]">Register</a></span>
        </form>
    </div>

</main>

<?php
require("views/partials/footer.php");
?>