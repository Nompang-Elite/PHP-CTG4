<!-- Seller page -->
<div>
    <div class="text-center text-4xl m-16">
        <h1>Update here!</h1>
    </div>
    <!-- Button add new ticket -->
    <div>
        <button class="bg-yellow-500 rounded-lg p-3 ml-80 mb-4">Add new ticket</button>
    </div>
    <!-- Card -->
    <?php
    foreach ($shows as $show) :
    ?>
    <div >
        <div class="flex justify-between bg-primary w-4/6 m-auto rounded-lg mb-3 ml-80">
            <div class="flex">
                <img src="../../contents/assets/imgs/1.jpg" alt="" class="p-1.5 w-32 h-32">
                <div class="m-auto flex gap-20 ml-10 text-white">
                    <h1 class="font-bold"><?= $show['title'] ;?></h1>
                    <p><?= $show['price']; ?></p>
                    <p><?= $show['datetime']; ?></p>
                </div>
            </div>
            <div class="flex items-center mr-10">
            <span class="material-symbols-outlined text-blue-500">edit_square</span>
                <p class="font-bold text-3xl mb-2 p-1 text-white">|</p>
                <span class="material-symbols-outlined text-red-700 mt-1 text-2xl">delete</span>
            </div>
        </div>
    </div>
    <?php endforeach ?>
    <!-- End card -->
</div>