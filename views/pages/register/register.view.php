<?php
require './views/partials/header.php';
?>
<main class="w-full h-screen  flex justify-center items-center bg-slate-900 text-white">
    <div class="flex h-full w-full">
        <div class="flex justify-center items-center  w-full max-sm:hidden ">
            <img src="https://wallpaperaccess.com/full/436209.jpg" alt="logo" class="relative h-full box-content opacity-10">
            <div class="relative h-full w-full">

            </div>
            <div class="absolute flex items-center flex-col">
                <img src="../../../contents/imgs/logo.png" alt="" width="60%" class="">
                <div class="p-4">
                    <h1 class="text-2xl ">Welcome to my website!</h1>
                    <p class="text-xs">The world is so beautiful. Keep your best. Think positive.</p>
                </div>

            </div>
        </div>
        <form action="/" method="POST" id="regis-form" class="flex flex-col gap-[0.5rem] shadow-md justify-center items-center w-[36rem] min-w-[20rem] max-sm:w-full">
            <div class="flex flex-col items-center">
                <h1 class="text-3xl">Register</h1>
            </div>
            <label class="flex w-full flex-row">
                <label class="flex w-full flex-col">
                    <label class="ml-9 text-[1rem]">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="First Name" class="p-2 rounded-md max-w-8/10 ml-9 w-9/12 bg-transparent outline-none bg-gray-800">
                    <span id="textfirst" class="ml-9 text-sm"></span>
                </label>
                <label class="flex w-full flex-col">
                    <label class="ml-5">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" class="p-2 rounded-md max-w-8/10 ml-5 w-9/12 bg-transparent outline-none bg-gray-800">
                    <span id="textlast" class="ml-9 text-sm"></span>
                </label>
            </label>
            <label class="w-full flex flex-col">
                <label class="ml-9">User Name</label>
                <input type="text" name="phonenumber" id="phonenumber" placeholder="User Name" class="p-2 rounded-md max-w-8/10 w-10/12 ml-9 bg-transparent outline-none bg-gray-800 ">
            </label>
            <label class="flex w-full flex-row">
                <label class="flex w-full flex-col">
                    <label class="ml-9">Date Of Birth</label>
                    <input type="date" name="date" id="date" placeholder="date" class="p-2 rounded-md max-w-8/10 ml-9 w-9/12 bg-transparent outline-none bg-gray-800">
                </label>
                <label class="flex w-full flex-col">
                    <label class="ml-5">Gender</label>
                    <select id="countries" class="p-2 rounded-md max-w-8/10 ml-5 w-9/12 bg-transparent outline-none bg-gray-800">
                        <option selected>Choose gender</option>
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                    </select>
                </label>
            </label>
            <label class="flex w-full flex-col">
                <label class="ml-9">Your Country</label>
                <input type="text" name="country" id="country" placeholder="Country" class="p-2 rounded-md max-w-8/10 ml-9 w-10/12 bg-transparent outline-none bg-gray-800">
            </label>
            <label class="flex w-full flex-col">
                <label class="ml-9">Email</label>
                <input type="email" name="email" onkeyup="validateEmailRegister()" id="email" placeholder="Email address" class="p-2 rounded-md max-w-8/10 ml-9 w-10/12 bg-transparent outline-none bg-gray-800">
                <span id="text" class="ml-9 text-sm"></span>
            </label>
            <label class="flex w-full flex-row">
                <label class="flex w-full flex-col">
                    <label class="ml-9">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="p-2 rounded-md max-w-8/10 ml-9 w-9/12 bg-transparent outline-none bg-gray-800">
                </label>
                <label class="flex w-full flex-col">
                    <label class="ml-5">Confirm_Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm_Password" class="p-2 rounded-md max-w-8/10 ml-5 w-9/12 bg-transparent outline-none bg-gray-800">
                </label>
            </label>
            <button class="btn p-2 mt-4 rounded-md max-w-8/10 w-10/12 border-2 border-[#01c8ee] text-[#01c8ee] ">Login</button>
        </form>
    </div>
</main>
<script src="../../../scripts/form.validation.js"></script>