<?php
$header = "Home";
require("views/partials/header.php");
require("views/partials/navbar.php");
?>

<!-- Home contents -->
<main>
    <!-- Carousel -->
    <?php
    require("views/partials/carousel.php");

    ?>
    <!-- Home -->
    <div class="card-container flex flex-wrap justify-center gap-6 m-10">
        <?php if (isset($shows)) {
            foreach ($shows as $show) {
                // print_r($show);

        ?>
                <div class="overflow-hidden rounded-lg shadow-lg w-[20rem] transition duration-300 hover:-translate-y-4">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black font-bold uppercase" href="<?= $show["ID"] ?>">
                                <?= $show["name"] ?>
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            11/1/19
                        </p>
                    </header>

                    <div class="flex items-center justify-between bg-[#fef9e6] p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                            <p class="ml-2 text-sm">
                                Author Name
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </div>

                </div>
        <?php

            }
        } ?>

    </div>
</main>

<?php
require("views/partials/footer.php");
?>