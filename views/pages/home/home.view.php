<?php
require("./views/partials/header.php");
require("./views/partials/navbar.php");
?>


<main>

    <!-- Contents -->
    <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 max-sm:grid-cols-1justify-items-center m-10 gap-10">
        <?php
        require("views/partials/card.php");
        ?>
    </div>


</main>


<?php
require("./views/partials/footer.php");
?>