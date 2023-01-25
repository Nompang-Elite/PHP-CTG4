<?php
$header = "Home";
require("views/partials/header.php");
require("views/partials/navbar.php");
require("models/show.model.php");
?>

<!-- Home contents -->
<!-- Content Start -->
<main class="container flex flex-col items-center">
    <!-- Section-1 Start -->
    <section class="latest-section pb-4">
        <header class="text-2xl py-4">Latest</header>
        <div class="flex flex-wrap justify-center gap-4">
            <!-- Card 1 -->
            <div class="flex justify-center w-80 card">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="#!">
                        <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
                    </a>
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Card title</h5>
                        <p class="text-gray-700 text-base mb-4">
                            Some quick example text to build on the card title and make up the bulk of the card's
                            content.
                        </p>
                        <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Section-1 End -->

</main>
<!-- Content End -->

<?php require("views/partials/footer.php") ?>