<?php
$header = "Home";
require("views/partials/header.php");
require("views/partials/navbar.php");
?>

<!-- Home contents -->
<main>


    <!-- List Show -->
    <div class="flex justify-center">
        <div class="grid grid-cols-3 gap-6 m-10 max-lg:grid-cols-2 max-sm:grid-cols-1 ">
            <?php require("views/partials/card.php"); ?>
        </div>
    </div>
</main>

<?php
require("views/partials/footer.php");
?>