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
                <h1 class="text-[2rem] font-bold">Account</h1>
                <div class="text-[1.2rem]">Username: <span class="text-[#01c8ee] pl-"><?=$user["info"]["username"]?></span></div>
                <div class="text-[1.2rem]">Account: <span class="text-[#01c8ee] pl-"><?=$user["info"]["type"]?></span></div>
                <div class="text-[1.2rem]">Email: <span class="text-[#01c8ee] pl-"><?=$user["info"]["email"]?></span></div>
            </div>
        </div>
    </main>
    
</main>

<?php
require("views/partials/footer.php");
?>