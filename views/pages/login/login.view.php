<?php
require("./views/partials/header.php");
require("./views/partials/navbar.php");
?>


<main>
    <!-- Contents -->
    <div class="flex justify-center items-center h-8/12">
        <div class="shadow-lg p-6 rounded-xl w-[20rem] h-[20rem] flex flex-col m-10">
            <form action="/login" method="post">
                <div class="flex flex-col space-y-4">
                    <h5 class="font-semibold text-xl">Sign In</h5>
                    <!-- Email -->
                    <div>
                        <input type="text" name="email" id="email" placeholder="Email Address" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full">
                    </div>
                    <!-- Password -->
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password" class="p-2 bg-boxgrey text-sm rounded-lg outline-primary w-full">
                    </div>
                    <button type="submit" class="p-2 border-2 bg-primary text-[#ffffff] rounded-lg transition duration-300 hover:border-primary hover:text-primary hover:bg-transparent ">Sign In</button>
                </div>
            </form>
        </div>
    </div>

</main>


<?php
require("./views/partials/footer.php");
?>