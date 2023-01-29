<?php
$header = "Search";
require("views/partials/header.php");
require("views/partials/navbar.php");
?>

<main class="flex flex-col justify-center items-center">
    <form action="/search" class="flex flex-col justify-center items-center w-8/12">
        <legend class="text-2xl font-bold m-4">Search</legend>
        <hr class="w-6/12">
        <div class='w-full max-w-md mx-auto'>
            <div class="relative flex items-center w-full h-12 rounded-lg shadow-md transition duration-200 focus-within:shadow-lg bg-white overflow-hidden">
                <div class="grid place-items-center h-full w-12 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" id="search" placeholder="Search something.." />
            </div>
        </div>
    </form>
    <div class="">
        <h1 class="text-2xl font-bold my-4">Available</h1>
    </div>
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
require("views/partials/footer.php")
?>