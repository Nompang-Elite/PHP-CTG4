<!-- require header -->
<?php require("header.php") ?>

<!-- card -->
<div class="card-container p-10  grid grid-cols-4 bg-slate-400 gap-5 justify-items-center">
    <div class="card w-64 pb-5 bg-gray-500 rounded overflow-hidden flex flex-col p-1">
        <img src="../../contents/imgs/love.jpg" alt="">
        <div class="title p-5 ">
            <!-- ___card-title___ -->
            <div class="flex"> 
                <span class="material-symbols-outlined">title</span>
                <span class="text-bold">DORAEMON</span><br>
            </div>

            <!-- card description -->
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, veniam.</div><br>

            <!-- card-location -->
            <div class="flex">
                <span class="material-symbols-outlined">distance</span>
                <span>PNC</span>
            </div>
        </div>
        <!-- button details -->
        <button class="bg-blue-500 p-3 rounded w-52 self-center ">View Detail</button>
    </div>
</div>

<!-- require footer -->
<?php require("footer.php") ?>
