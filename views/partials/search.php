<?php
require 'header.php';
?>
<h1 class="text-center text-6xl mt-40 italic text-lime-500">YAYAKOKO</h1>
<div class="relative">
    <div class="absolute inset-y-0 left-0 flex items-center ml-52 pl-3 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    </div>
    <input type="search" id="default-search" class="block ml-52 w-2/3 mt-1.5 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search movies or title movies" required>              
    <button type="submit" class="text-white absolute right-60 bottom-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
</div>
<div class="flex">
    <div class="flex flex-col mt-2">
        <label for="" class="ml-60 text-lime-500">Quantity</label>
        <select id="cars" class="block ml-60 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="all">All</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
    </div>

    <div class="flex flex-col mt-2">
        <label for="" class="ml-10 text-lime-500">Year</label>
        <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="all">All</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
    </div>

    <div class="flex flex-col mt-2">
        <label for="" class="ml-10 text-lime-500">Genre</label>
        <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="all">All</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
    </div>

    <div class="flex flex-col mt-2">
        <label for="" class="ml-10 text-lime-500">Rating</label>
        <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="all">All</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
    </div>

    <div class="flex flex-col mt-2">
        <label for="" class="ml-10 text-lime-500">Order by</label>
        <select id="cars" class="block ml-8 w-32 mt-1 p-2 pl-0 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="all">All</option>
            <option value="lastest">Lastest</option>
            <option value="first">Firstest</option>
            <option value="medium">mediumest</option>
        </select>
    </div>
</div>
<?php 
require 'footer.php';
?>