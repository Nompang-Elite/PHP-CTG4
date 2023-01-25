<?php
$header = "Login";
require("views/partials/header.php");
?>

<!-- Login page -->
<main class="flex w-full">
    <div class="bg-black">
        <h1>Left</h1>
    </div>
    <div class="flex">
        <form action="/login" method="post">
            <input type="text" name="test">
            <button>Sign In</button>
        </form>
    </div>
</main>

<?php
require("views/partials/footer.php");
?>