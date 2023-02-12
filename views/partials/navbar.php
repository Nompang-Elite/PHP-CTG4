<nav class="flex items-center justify-between w-full px-4 bg-primary text-secondary z-30">
    <div class="w-4/12 flex p-3">
        <span onclick="toggleSideMenu();">
            <img src="../../contents/assets/logo/5.png" alt="" class="w-28">
        </span>
    </div>
    <div class="flex items-center justify-between">

        <ul class="flex">
            <li class="flex space-x-2">
                <?php
                if (isset($_SESSION["logged"]) && isset($_SESSION["activeUser"])) :
                ?>
                    <?php
                    if ($_SESSION["activeUser"]["account_type"] === 2) :
                    ?>
                        <div onclick="goToDashboard()" class="flex items-center justify-center hover:cursor-pointer transition-all hover:bg-secondary hover:text-white p-4 w-10 h-10 border-2 border-transparent rounded-lg">
                            <span class="material-symbols-rounded text-3xl">
                                dashboard
                            </span>
                        </div>

                    <?php
                    endif;
                    ?>
                    <div class="flex items-center justify-center hover:cursor-pointer transition-all hover:bg-secondary hover:text-white p-4 w-10 h-10 border-2 border-transparent rounded-lg">
                        <span class="material-symbols-rounded">
                            shopping_cart
                        </span>
                    </div>
                    <div onclick="goToAccount()" class="flex items-center justify-center hover:cursor-pointer transition-all hover:bg-secondary hover:text-white w-fit h-fit border-2 border-transparent rounded-lg overflow-hidden">
                        <img src="data:image/png;base64,<?= base64_encode($_SESSION['activeUser']['image']) ?>" alt="" class="w-10 h-10">
                    </div>
                    <span onclick="logout()" class="flex items-center justify-center hover:cursor-pointer transition-all hover:bg-secondary hover:text-white p-4 w-10 h-10 border-2 border-transparent rounded-lg">
                        <span class="material-symbols-rounded">
                            logout
                        </span>
    </div>

<?php
                else :
?>

    <a href="/login" class="flex items-center justify-center hover:cursor-pointer transition-all hover:bg-secondary hover:text-white p-4 w-10 h-10 border-2 border-transparent rounded-lg">
        <span class="material-symbols-rounded text-3xl">
            person
        </span>
    </a>
    <a href="/register" class="flex items-center justify-center hover:cursor-pointer transition-all hover:bg-secondary hover:text-white p-4 w-10 h-10 border-2 border-transparent rounded-lg">
        <span class="material-symbols-rounded">
            app_registration
        </span>
    </a>

<?php
                endif;
?>

</li>
</ul>
</div>
</nav>