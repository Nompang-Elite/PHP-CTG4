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

        <div class="flex max-sm:flex-col max-sm:items-center w-full text-md font-normal text-white p-4 rounded-lg bg-primary border-2">
            <div class="flex flex-col justify-between h-full w-2/5 max-sm:w-full">
                <img src="https://picsum.photos/300/200" class="rounded-lg w-full h-[200px] overflow-hidden">
                <ul class="my-4 flex flex-col space-y-2">
                    <li class="flex items-center space-x-2 text-lg font-semibold uppercase"><span><?= $title ?></span></li>
                    <li class="flex items-center space-x-2"><span class="material-symbols-rounded font-light">sell</span><span>Price :</span><span><?= $price ?> $</span></li>
                    <li class="flex items-center space-x-2"><span class="material-symbols-rounded font-light">location_on</span><span>Address :</span><span><?= $address ?></span></li>
                </ul>
                <div class="flex flex-col space-y-4 text-black w-full">
                    <div class="flex w-full space-x-2">
                        <select name="date" id="date" class="w-full p-1 rounded-lg">
                            <option disabled selected>Time</option>
                            <option value="">Opt1</option>
                            <option value="">Opt2</option>
                            <option value="">Opt3</option>
                        </select>
                        <select name="Time" id="date" class="w-full p-1 rounded-lg">
                            <option disabled selected>Date</option>
                            <option value="">Opt1</option>
                            <option value="">Opt2</option>
                            <option value="">Opt3</option>
                        </select>
                    </div>
                    <button class="w-full border-2 border-secondary text-secondary hover:cursor-pointer bg-transparent p-1 rounded-lg">
                        Get Ticket
                    </button>
                </div>
            </div>
            <div class="h-full px-4 w-full max-sm:my-4">
                <header class="text-lg font-semibold mb-6">Descriptions</header>
                <p>
                    <?= $descriptions ?>
                </p>
            </div>
        </div>

    </div>

</main>


<?php
require("./views/partials/footer.php");
?>