<?php
require("./views/partials/header.php");
require("./views/partials/navbar.php");
?>


<main>

    <!-- Contents -->
    <div class="grid grid-cols-3 justify-items-center m-10 gap-10">
        <?php
        require("views/partials/card.php");
        ?>
    </div>


</main>


<?php
require("./views/partials/footer.php");
?>