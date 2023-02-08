<div class="detail-container flex flex-col p-5 rounded-lg" onload="load()">
    <div class="detail-icon self-end">
        <span class="material-symbols-outlined">more_horiz </span>
        <span class="material-symbols-outlined hover:cursor-pointer" onclick="closeDetails()">close</span>
        <?=print_r([$_POST, $_GET]) ?>
    </div>
    <img src="../../contents/assets/imgs/love.jpg" alt="" class="rounded-lg mb-5 ">
    <div class="detail-information font-sans font-light text-lg">
        <span class="text-2xl font-bold font-sans">AMAZING CONCERT</span><br>
        <span class=" font-sans">AMAZING CONCERT is the concert haven't before. Don't forgot to joing together</span><br>
        <div class="time flex items-center">
            <span class="material-symbols-outlined mr-5">schedule </span>
            <span>5:00 PM</span>
        </div>
        <div class="date flex items-center">
            <span class="material-symbols-outlined mr-5">calendar_month </span>
            <span>14 February 2023</span>
        </div>
        <div class="location flex items-center">
            <span class="material-symbols-outlined mr-5">distance </span>
            <span>Passerelles Numeriques Cambodia</span>
        </div>
        <div class="price flex items-center">
            <span class="material-symbols-outlined mr-5">paid </span>
            <span>1 000 $</span>
        </div>
    </div>
    <button class="bg-red-500 rounded-lg p-3 w-full self-center mt-5">BUY NOW</button>

</div>