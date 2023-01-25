<?php
$header = "Login";
require("views/partials/header.php");
?>

<!-- Login page -->
<main class="flex w-full h-screen">
    <div class="bg-black w-8/12 max-[1200px]:w-2/4 max-[800px]:hidden">
        <h1>Left</h1>
    </div>
    <div class="login-form-bg flex flex-col w-4/12 justify-center items-center max-[1200px]:w-2/4 max-[800px]:w-full">
        <form action="/login" method="post" class="login-form flex flex-col gap-8">
            <legend class="text-2xl">LOGIN</legend>
            <input type="email" id="email" name="email" placeholder="Email" class="p-1.5 w-80 border-b-2 bg-transparent">
            <input type="password" id="password" name="password" placeholder="Password" class="p-1.5 w-80 border-b-2 bg-transparent">
            <button class="btn-primary">Sign In</button>
        </form>
        <a href="/" class="mt-10">Back to Home</a>
    </div>
</main>

<?php
require("views/partials/footer.php");
?>