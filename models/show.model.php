<?php
function listShows(array $array): void
{
    foreach ($array as $show) :
?>
        <!-- Card Start -->
        <div class="flex justify-center w-80 card">
            <div class="rounded-lg shadow-lg bg-white max-w-sm">
                <a href="#!">
                    <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
                </a>
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2"><?= $show["name"] ?></h5>
                    <p class="text-gray-700 text-base mb-4">
                        <?= $show["description"] ?>
                    </p>
                    <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                </div>
            </div>
        </div>
        <!-- Card End -->
<?php
    endforeach;
}
?>