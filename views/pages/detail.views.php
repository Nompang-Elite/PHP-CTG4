<div class="flex flex-col items-center w-full text-md font-normal text-white p-4 rounded-lg bg-primary">
    <div class="flex flex-col justify-between h-full w-full">
        <div class="flex items-center">
            <span class="underline hover:cursor-pointer py-4 -mt-4" onclick="closeDetail()">Close</span>
        </div>
        <img src="data:image/jpeg;base64, <?= base64_encode($imageData) ?>" class="rounded-lg w-full h-[200px] overflow-hidden">
        <ul class="my-4 flex flex-col space-y-2">
            <li class="flex items-center space-x-2 text-lg font-semibold uppercase"><span><?= $title ?></span></li>
            <li class="flex items-center space-x-2"><span class="material-symbols-rounded font-light">sell</span><span>Price :</span><span><?= $price ?> $</span></li>
            <li class="flex items-center space-x-2"><span class="material-symbols-rounded font-light">location_on</span><span>Address :</span><span><?= $address ?></span></li>
        </ul>
        <div class="flex flex-col space-y-4 text-black w-full">
            <div class="flex w-full space-x-2">
                <select name="date" id="date" class="w-full p-1 text-secondary bg-transparent rounded-lg border-2 border-secondary">
                    <option disabled selected>Time</option>
                    <option value="">Opt1</option>
                    <option value="">Opt2</option>
                    <option value="">Opt3</option>
                </select>
                <select name="Time" id="date" class="w-full p-1 text-secondary bg-transparent rounded-lg border-2 border-secondary">
                    <option disabled selected>Date</option>
                    <?php
                    foreach ($showData as $show) {
                    ?>
                        <option value="<?= $show['date'] ?>"><?= $show['date'] ?></option>
                    <?
                    }
                    ?>
                </select>
            </div>
            <button class="w-full border-2 border-secondary text-secondary hover:cursor-pointer bg-transparent p-1 rounded-lg">
                Get Ticket
            </button>
        </div>
    </div>
    <div class="h-full px-4 w-full my-4">
        <header class="text-lg font-semibold mb-6">Descriptions</header>
        <p>
            <?= $descriptions ?>
        </p>
    </div>
</div>