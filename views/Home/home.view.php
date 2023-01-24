<?php
$header = "Home";
require("views/partials/header.php");
require("views/partials/navbar.php");
?>

<!-- Home contents -->
<!DOCTYPE html>
<html lang="en">
    <div class="main-top grid grid-cols-4 gap-4 pt-10">
        <div class="main-top-left bg-red-500 lg:h-80 md:h-64 sm:h-48 rounded-r">left</div>
        <div class="main-top-center  bg-red-400  col-span-2 rounded ">center</div>
        <div class="main-top-right  bg-red-300 rounded-l">right</div>
    </div>
    <div>
        <div class="container">
            <div class="top-contains flex justify-between pl-16 py-10">
                <span class="bg-red-200 rounded">Top concerts</span>
                <span class="bg-red-200 rounded">See more</span>
            </div>
            <div class="group-card grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-1 gap-4 pl-16">
                <div class="card bg-slate-400 rounded h-96 ">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div class="flex flex-col">
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
                <div class="card bg-slate-400 rounded h-96">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div flex>
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
                <div class="card bg-slate-400 rounded h-96">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div flex>
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
                <div class="card bg-slate-400 rounded h-96">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div flex>
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
                <div class="card bg-slate-400 rounded h-96">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div flex>
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
                <div class="card bg-slate-400 rounded h-96">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div flex>
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
                <div class="card bg-slate-400 rounded h-96">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div flex>
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
                <div class="card bg-slate-400 rounded h-96">
                    <div class="image-card bg-red-500 h-60 rounded "></div>
                    <div flex>
                        <span>Title</span><br>
                        <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias minima qui iusto sunt dolorem a debitis id et, pariatur aliquid.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require("views/partials/footer.php")?>