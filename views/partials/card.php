<!-- require header -->


<?php
foreach ($shows as $show) :
?>
    <div id="<?= $show['id'] ?>" class="card w-60 bg-primary text-white rounded-lg overflow-hidden flex flex-col p-1 justify-between transition-all duration-200 hover:scale-105 hover:cursor-pointer shadow-lg" onclick="showDetail(this)">
        <div class="p-1 w-full overflow-hidden">
            <img src="data:image/jpeg;base64,<?= base64_encode($show['image']) ?>" alt="" class="rounded-lg w-[300px] h-[140px]">
            <!-- ___card-title___ -->
            <div class="flex p-2">
                <span class="font-normal uppercase overflow-hidden"><?= $show["title"] ?></span><br>
            </div>
        </div>
        <div class="title p-2 pb-4 w-full">
            <span class="bg-secondary p-1.5 px-3 rounded-lg w-full"><?= $show['price'] ?> $</span>
        </div>
    </div>

<?php
endforeach;
?>