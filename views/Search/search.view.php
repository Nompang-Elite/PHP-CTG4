<?php
$header = "Search";
require("views/partials/header.php");
require("views/partials/navbar.php");
?>

<h1 class="text-center text-6xl mt-40 italic">YAYAKOKO</h1>
<div class="flex w-full">
<div class="flex w-full justify-center">
    <input type="text" class=" w-2/3 mt-1.5 p-3 rounded-l-lg pl-10 text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search movies or title movies" required" placeholder="Search">
    <button class="p-2 rounded-r-lg bg-slate-400">Search</button>
</div>
</div>
<div class="flex  w-full  flex-wrap justify-center">
<div class="flex flex-col mt-2">
    <label for="" class="">Quantity</label>
    <select id="cars" class="block w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="all">All</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
</div>

<div class="flex flex-col mt-2">
    <label for="" class="ml-10">Year</label>
    <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="all">All</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
</div>

<div class="flex flex-col mt-2">
    <label for="" class="ml-10">Genre</label>
    <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="all">All</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
</div>

<div class="flex flex-col mt-2">
    <label for="" class="ml-10">Rating</label>
    <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="all">All</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
    </select>
</div>

<div class="flex flex-col mt-2">
    <label for="" class="ml-10">Order by</label>
    <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="all">All</option>
        <option value="lastest">Lastest</option>
        <option value="first">Firstest</option>
        <option value="medium">mediumest</option>
    </select>
</div>
</div>




<?php require("views/partials/footer.php")?>