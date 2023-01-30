<?php
if (isset($showsList)) {
    foreach ($showsList as $show) {
        $cardTitle = $show["name"];
        $cardDescription = $show["descriptions"];
?>
        <div class="shadow-lg w-[28rem] h-[12rem] flex rounded-lg transition duration-300 hover:-translate-y-4">
            <!-- <div>
                <img src="https://picsum.photos/400/200" alt="" class="relative w-full rounded-l-lg h-full z-0">
            </div> -->
            <div class="z-10 flex flex-col justify-between h-full w-[20rem]">
                <h5 class="py-2 px-6 font-semibold text-lg uppercase"><?= $cardTitle ?></h5>
                <div class="p-6 -mt-4 overflow-hidden">
                    <?= $cardDescription ?>
                </div>
                <div class="p-6 flex gap-2">
                    <a href="/details" class="text-sm border-2 border-[#e41376] text-[#e41376] p-2 rounded-lg">
                        Details
                    </a>
                </div>

            </div>
        </div>
<?php
    }
}

?>