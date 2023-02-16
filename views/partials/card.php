<!-- require header -->

<?php
foreach ($shows as $show) :
?>
    <div class="hover:scale-105 transition duration-300 flex flex-col justify-between w-80 h-[24rem] bg-white border border-gray-200 rounded-xl shadow dark:bg-primary overflow-hidden">
        <span class="p-2">
            <img class="rounded-lg" src="data:image/jpeg;base64,<?= base64_encode($show['image']) ?>" alt="" />
        </span>
        <div class="p-5 overflow-hidden">
            <span>
                <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white"><?= $show['title'] ?></h5>
            </span>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 overflow-hidden flex items-center space-x-2"><span class="fa-solid fa-tag"></span> <span><?= $show['price']. " $" ?></span> </p>
            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400 overflow-hidden flex items-center space-x-2"><span class="fa-solid fa-map"></span> <span><?= $show['address'] ?></span> </p>
            <span onclick="showDetail(this)" id="<?= $show['id'] ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-secondary bg-transparent border-2 border-secondary rounded-lg hover:bg-secondary hover:text-white hover:cursor-pointer transition duration-300">
                Details
            </span>
        </div>
    </div>

<?php
endforeach;
?>