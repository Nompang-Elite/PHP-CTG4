<?php
foreach ($shows as $id => $show) :

?>
    <div class="shadow-lg bg-color1 text-white hover:scale-105">
        <a href="#" class="flex flex-col">
            <div class="">
                <img src="https://picsum.photos/600" alt="" class="w-full h-auto">
            </div>
            <div class="p-4">
                <span class="text-xl uppercase"><?= $show["name"] ?></span>
            </div>
        </a>
    </div>

<?php

endforeach;
?>