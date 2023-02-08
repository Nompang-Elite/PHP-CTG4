<?php
require("./views/partials/header.php");
require("./views/partials/nav.php");
?>


<main class="flex">
    <!-- Side Menu -->
    <?php
    require("./views/partials/side_menu.php");
    ?>
    <!-- Cartd Container -->
    <div class="card-container flex flex-wrap justify-center w-full h-full overflow-scroll overflow-x-hidden gap-8 p-4">

        <?php
        require("./views/partials/card.php");
        ?>

    </div>

</main>


<?php
require("./views/partials/footer.php");
?>