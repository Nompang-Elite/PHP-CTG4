<div id="side-menu" class="p-3 relative h-full bg-primary text-white shadow-sm shadow-white z-30">
    <div class="flex flex-col w-full space-y-4 text-secondary">
        <!-- Home -->
        <span onclick="goHome()" class="flex items-center space-x-6 hover:bg-secondary hover:cursor-pointer hover:text-white transition-all duration-200 p-2 rounded-lg">
            <span class="material-symbols-rounded">home</span>
            <span class="side-link-text">Home</span>
        </span>
        <!-- Cart -->
        <span class="flex items-center space-x-6 hover:bg-secondary hover:cursor-pointer hover:text-white transition-all duration-200 p-2 rounded-lg">
            <span class="material-symbols-rounded">explore</span>
            <span class="side-link-text">Explores</span>
        </span>
        <!-- Settings -->
        <span class="flex items-center space-x-6 hover:bg-secondary hover:cursor-pointer hover:text-white transition-all duration-200 p-2 rounded-lg">
            <span class="material-symbols-rounded">trending_up</span>
            <span class="side-link-text">Trending</span>
        </span>
        <span onclick="goToSearch()" class="flex items-center space-x-6 hover:bg-secondary hover:cursor-pointer hover:text-white transition-all duration-200 p-2 rounded-lg">
            <span class="material-symbols-rounded">search</span>
            <span class="side-link-text">Search</span>
        </span>
    </div>
</div>