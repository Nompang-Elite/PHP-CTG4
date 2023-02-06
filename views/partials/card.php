<!-- require header -->
<?php
$shows = getShowData($db);
?>

<?php
foreach ($shows as $show) :
?>
    <div class="card w-64 pb-5 bg-gray-500 rounded-lg overflow-hidden flex flex-col p-2">
        <img src="https://picsum.photos/300/200" alt="" class="rounded-lg">
        <div class="title p-5 ">
            <!-- ___card-title___ -->
            <div class="flex">
                <span class="font-semibold text-2xl"><?=$show["name"]?></span><br>
            </div>
            <!-- card-location -->
            <div class="flex">
                <span class="font-semibold text-sm"> Address: PNC</span>
            </div>
            <!-- ___card-price___ -->
            <div class="flex">
                <span class="font-semibold text-sm">Price: 500$</span><br>
            </div>

        </div>
        <!-- button details -->
        <button class="bg-blue-500 p-3 rounded-lg w-52 self-center ">View Detail</button>
    </div>

<?php
endforeach;
?>