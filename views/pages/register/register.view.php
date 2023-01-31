<?php
require("./views/partials/header.php");
require("./views/partials/navbar.php");
?>


<main>


    <div class="flex justify-center items-center h-8/12">
        <div class="shadow-lg p-6 rounded-xl w-[20rem] h-fit flex flex-col m-10">
            <form action="/register" method="post">
                <div class="flex flex-col space-y-2">
                    <h5 class="font-semibold text-xl my-4">Register</h5>

                    <div class="flex space-x-4">
                        <input type="text" name="firstName" max="30" min="1" id="firstName" placeholder="First Name" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full" required>
                        <input type="text" name="lastName" max="30" min="1" id="lastName" placeholder="Last Name" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full" required>
                    </div>
                    <div class="space-y-2">
                        <input type="text" name="username" id="username" placeholder="Username" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full" required>
                        <input type="text" name="email" id="email" placeholder="Email Address" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full" required>
                    </div>
                    <div class="space-y-2">
                        <input type="password" name="password" id="password" placeholder="Create Password" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full" required>
                        <input type="password" name="confirmPass" id="confirmPass" placeholder="Confirms Password" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full" required>
                    </div>
                    <div>
                        <div>
                            <input type="radio" name="gender" id="maleRadio" required>
                            <label for="maleRadio">Male</label>
                        </div>
                        <div>
                            <input type="radio" name="gender" id="femaleRadio" required>
                            <label for="femaleRadio">Female</label>
                        </div>
                    </div>
                    <div>
                        <input type="date" name="birthDate" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full" required>
                    </div>
                    <button type="submit" class="p-2 border-2 bg-primary text-[#ffffff] rounded-lg transition duration-300 hover:border-primary hover:text-primary hover:bg-transparent ">Register</button>
                </div>
            </form>

        </div>
    </div>


</main>


<?php
require("./views/partials/footer.php");
?>