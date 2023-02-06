<?php
require_once("./views/partials/header.php");
?>
<!-- Login -->
<main class="w-full h-screen flex justify-center items-center bg-slate-900 text-white">
    <div class="flex h-full w-full">
        <div class="flex justify-center items-center  w-full max-sm:hidden ">
            <!-- Contents -->
            <img src="../../../contents/assets/imgs/1.jpg" alt="logo" class="relative h-full box-content opacity-10">
            <div class="relative h-full w-full">

            </div>
            <div class="absolute flex items-center flex-col">
                <img src="../../../contents/assets/imgs/logo.png" alt="" width="60%" class="">
                <div class="p-4 w-[60%]">
                    <h1 class="text-2xl ">Welcome to my website!</h1>
                    <p class="text-xs">The world is so beautiful. Keep your best. <br>Think positive.</p>
                </div>

            </div>
        </div>
        <!-- Form login -->
        <form action="/login" method="POST" id="login-form" class="flex flex-col gap-[1rem] shadow-md justify-center items-center w-[36rem] min-w-[20rem] max-sm:w-full">
            <div class="flex flex-col items-center">
                <h1 class="text-3xl">LOGIN</h1>
            </div>
            <label class="flex w-full flex-col">
                <input type="email" name="email" onkeyup="validateEmail()" id="email" placeholder="Email address" class="p-2 rounded-md max-w-8/10 ml-9 w-10/12 bg-transparent outline-none bg-gray-800">
                <span id="text" class="ml-9 text-sm"></span>
            </label>
            <label class="w-full flex flex-col">
                <input type="password" name="pass" onkeyup="validPassoword()" id="pass" placeholder="Password" class="p-2 rounded-md max-w-8/10 w-10/12 ml-9 bg-transparent outline-none bg-gray-800 ">
                <span id="textPassword" class="ml-9 text-sm"></span>
            </label>
            <a href="#" class="text-[#01c8ee] ml-52">Forget password?</a>
            <button class="btn p-2 rounded-md max-w-8/10 w-10/12 border-2 border-[#01c8ee] text-[#01c8ee] ">Login</button>
            <hr class="w-4/12">
            <span>Don't have account? <a href="/register" class="text-[#01c8ee]" >Register</a></span>
        </form>
        <!-- End form login -->
        <script src="../../../scripts/login.js"></script>
    </div>
</main>
</body>

</html>