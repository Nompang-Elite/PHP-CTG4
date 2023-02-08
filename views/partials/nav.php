<nav class="flex items-center justify-between w-full px-4 bg-primary shadow-sm border-b-2 border-gray-100">
    <div class="w-4/12 flex p-3">
        <span onclick="toggleMenu();">
            <img src="../../contents/assets/logo/5.png" alt="" class="w-28">
        </span>
    </div>
    <div class="flex items-center justify-between w-full text-white">
        <form action="/search" class="flex w-full">
            <input type="text" placeholder="Search" class="p-2 w-2/4 border-1 bg-gray-600 rounded-lg outline-none text-white">
        </form>
        <ul class="flex">
            <li class="flex">

                <?php
                if (isset($_SESSION["logged"]) && isset($_SESSION["activeUser"])) :
                ?>

                    <a href="/account" class="flex items-center justify-center transition-all hover:text-white hover:border-white p-4 w-12 h-12 border-2 border-transparent rounded-full">
                        <span class="material-symbols-rounded text-3xl">
                            person
                        </span>
                    </a>
                    <a href="/cart" class="flex items-center justify-center transition-all hover:text-white hover:border-white p-4 w-12 h-12 border-2 border-transparent rounded-full">
                        <span class="material-symbols-rounded">
                            shopping_cart
                        </span>
                    </a>
                    <a href="/logout" class="flex items-center justify-center transition-all hover:text-white hover:border-white p-4 w-12 h-12 border-2 border-transparent rounded-full">
                        <span class="material-symbols-rounded">
                            logout
                        </span>
                    </a>

                <?php
                else :
                ?>

                    <a href="/login" class="flex items-center justify-center transition-all hover:text-white hover:border-white p-4 w-12 h-12 border-2 border-transparent rounded-full">
                        <span class="material-symbols-rounded text-3xl">
                            person
                        </span>
                    </a>
                    <a href="/register" class="flex items-center justify-center transition-all hover:text-white hover:border-white p-4 w-12 h-12 border-2 border-transparent rounded-full">
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