<?php
foreach($shows as $id => $show):

?>
<div class="w-60 h-80 shadow-xl">
    <a href="#">
        <div class="">
            <img src="https://picsum.photos/600" alt="" class="w-full h-auto">
        </div>
        <div class="p-4">
            <span class="text-xl uppercase"><?=$show["name"]?></span>
        </div>
    </a>
</div>

<?php

endforeach;
?>