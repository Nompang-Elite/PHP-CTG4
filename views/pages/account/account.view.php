<?php
require("./views/partials/header.php");
require("./views/partials/nav.php");
?>
<main class="flex w-full">
    <?php
    // Side Menu
    require("./views/partials/side_menu.php");
    ?>
    <div class="w-full p-4">
        <!-- Contents goes here!!! -->
        <section class="flex h-auto bg-red-11">
            <div class="flex w-full items-center justify-center lg:py-0">
                <div class="flex felx-row rounded-lg justify-center h-full w-full">
                    <div class="flex items-start bg-gray-200 flex-col w-full md:space-y-6 sm:p-8 ">
                        <div class="bg-red-100 pt-5 pb-3 rounded-lg">
                            <div class="flex items-center ml-12">
                                <img src="../../../contents/assets/logo/son.jpg" alt="" class="w-1/6 rounded-full">
                                <div class="ml-10">
                                    <p>Villa Nhea</p>
                                    <p>Hello</p>
                                </div>
                            </div>
                            <div class="ml-12 mt-7">
                                <div class="flex space-x-3">
                                    <img src="../../../contents/assets/logo/email.png" alt="" class="w-7">
                                    <p><a href="">villa.nhea@student.passerellesnumeriques.org</a> </p>
                                </div>
                                <div class="flex space-x-3 mt-4">
                                    <img src="../../../contents/assets/logo/date.png" alt="" class="w-7">
                                    <p>02/02/2023</p>
                                </div>
                                <div class="flex space-x-3 mt-4">
                                    <img src="../../../contents/assets/logo/position.png" alt="" class="w-7">
                                    <p>Phnom Phen </p>
                                </div>
                                <div class="flex space-x-3 mt-4">
                                    <img src="../../../contents/assets/logo/phone.png" alt="" class="w-7">
                                    <p>088888888</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php
require("./views/partials/footer.php");
?>