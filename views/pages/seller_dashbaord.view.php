<!-- Seller page -->
<div class="w-full h-full overflow-scroll overflow-x-hidden ">
    <?=require('./views/pages/form_add_ticket.view.php')?>
    <div class="text-center text-4xl m-10">
        <h1>Update here!</h1>
    </div>
    <div >
        <!-- Button add new ticket -->
        <div>
            <button class="bg-yellow-500 rounded-lg p-3 mb-4 ml-40 hover:bg-green-500" onclick="add()">Add new ticket</button>
        </div>
        <!-- Card -->
        <div>
        <?php
        foreach ($shows as $show) :
        ?>
            <div class="flex justify-between bg-primary w-9/12 m-auto rounded-lg mb-3">
                <div class="flex">
                    <img class="p-1.5 w-54 rounded-lg h-32" src="data:image/jpeg;base64,<?= base64_encode($show['image']) ?>" alt="" />
                    <div class="m-auto flex gap-20 ml-10 text-white">
                        <h1 class="font-bold"><?= $show['title'] ;?></h1>
                        <p><?="$" . " " . $show['price']; ?></p>
                        <p><?= $show['datetime']; ?></p>
                    </div>
                </div>
                <div class="flex items-center mr-10">
                <span class="fa-solid fa-edit text-blue-500 text-2xl" onclick="editShow()" id="<?= $show["id"] ?>"></span>
                    <p class="font-bold text-3xl mb-2 p-1 text-white">|</p>
                    <span class="fa-solid fa-trash text-red-700 mt-1 text-2xl" onclick="deleteShow()" id="<?= $show["id"] ?>"></span>
                </div>
            </div>
        <?php endforeach ?>
        </div>
        <!-- End card -->
    </div>
</div>