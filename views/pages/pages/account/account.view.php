<?php
$header = "Account";
require("views/partials/header.php");
require("views/partials/navbar.php");
?>

<!-- Account contents -->
<main class="h-screen">
    <main class="h-screen flex justify-center items-center">
        <div class="flex justify-center items-center">
            <divc class="p-8 border-2 w-[30rem] rounded-[1rem] shadow-lg relative -top-20">
                <h1 class="text-[2rem] font-bold">Account Info</h1>
                <ul class="text-md">
                    <li class="font-semibold">Username: <span class="text-[#01c8ee]"><?=$username?></span></li>
                    <li class="font-semibold">First Name: <span class="text-[#01c8ee]"><?=$firstName?></span></li>
                    <li class="font-semibold">Last Name: <span class="text-[#01c8ee]"><?=$lastName?></span></li>
                    <li class="font-semibold">Email: <span class="text-[#01c8ee]"><?=$email?></span></li>
                    <li class="font-semibold">Account: <span class="text-[#01c8ee]"><?=$accountType?></span></li>
                </ul>
        </div>
        </div>
    </main>

</main>

<?php
require("views/partials/footer.php");
?>