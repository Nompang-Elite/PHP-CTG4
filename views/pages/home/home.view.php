<?php
require("./views/partials/header.php");
require("./views/partials/nav.php");
?>

<main class="flex w-full">

    <?php
    // Side Menu
    require("./views/partials/side_menu.php");
    ?>

    <div class="w-full h-full p-4">
        <!-- Contents goes here!!! -->
        <div class="grid grid-cols-5 h-full gap-4">
            <?php
            require("./views/partials/card.php");
            ?>

        </div>
    </div>



</main>


<?php
require("./views/partials/footer.php");
?>