<!-- Navigationa Start -->
<nav class="navbar flex justify-between max-sm:flex-col">
  <!-- Hamberger -->
  <span id="menu-icon" class="material-icons nav-link p-3 text-center hover:cursor-pointer sm:hidden">menu</span>
  <div id="menu-content" class="flex w-full items-center max-sm:flex-col  max-sm:hidden">
    <div id="nav-content" class="container flex items-center max-sm:flex-col">
      <img src="../../assets/imgs/logo-no-background.png" alt="logo" class="px-4 w-18 h-10 max-sm:m-4">
      <ul class="flex max-sm:flex-col max-sm:w-full">
        <li class="flex"><a href="/" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4">Home</a>
        </li>
        <li class="flex"><a href="#" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4">Explores</a>
        </li>
        <li class="flex"><a href="#" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4">Trending</a>
        </li>
      </ul>
    </div>
    <div class="flex items-center max-sm:w-full">
      <form action="/search">
        <input type="search" id="nav-search" placeholder="Search" class="p-1.5 rounded-md px-4 outline-none mx-4 w-70 text-black w-[20rem] max-lg:w-[10rem]">
      </form>
    </div>
    <div class="flex mr-4 max-sm:w-full">
      <ul class="flex max-sm:flex-col max-sm:w-full">
        <?php if (isset($user["active"]) and $user["active"] === true) : ?>
          <li id="user-icon" class="flex"><a href="/account" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4 flex justify-center"><span class="material-icons">person</span></a></li>
          <li id="cart-icon" class="flex"><a href="#" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4 flex justify-center"><span class="material-icons">shopping_cart</span></a></li>
          <li class="flex"><a href="/logout" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4 flex justify-center"><span class="material-icons">logout</span></a></li>
        <?php else : ?>
          <li class="flex"><a href="/login" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4 flex justify-center"><span class="material-icons">person</span>Login</a></li>
          <li class="flex"><a href="/register" class="nav-link p-2 px-3 max-sm:w-full max-sm:m-0 max-sm:p-4 flex justify-center">
              <span class="material-icons">app_registration</span> Register
            </a></li>

        <?php endif ?>

      </ul>
    </div>
  </div>

</nav>
<!-- Navigationa End -->