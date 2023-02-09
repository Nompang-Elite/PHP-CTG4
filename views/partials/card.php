<!-- require header -->
<?php
$shows = getShowData($db);
?>

<?php
foreach ($shows as $show) :
?>
    <div class="card w-64 bg-primary text-white rounded-lg overflow-hidden flex flex-col p-1 justify-between transition-all duration-200 hover:scale-105">
        <div>
            <img src="https://picsum.photos/300/200" alt="" class="rounded-lg w-[300px] h-[140px]">
            <!-- ___card-title___ -->
            <div class="flex p-2">
                <span class="font-semibold text-xl uppercase overflow-hidden"><?= $show["name"] ?></span><br>
            </div>
        </div>
        <div class="title p-2 ">
            <!-- card-location -->
            <div class="flex">
                <span class="font-semibold text-sm">Address: <?= $show['address'] ?></span>
            </div>
            <!-- ___card-price___ -->
            <div class="flex">
                <span class="font-semibold text-sm">Price: <span class="text-green-400"><?= $show['price'] ?> $</span></span></span><br>
            </div>

            <!-- button details -->
            <div class="flex space-x-2">
                <span id="<?= $show['id'] ?>" class="mt-4 border-2 border-secondary text-secondary p-2 rounded-lg w-full text-center" onclick="getShowDetail(this)">View Detail</span>
            </div>
        </div>
    </div>

<?php
endforeach;
?>