 <nav class="navbar flex justify-between items-center">
   <ul class="flex items-center">
     <li class="flex pl-4 pr-3"><img src="../../assets/imgs/logo-no-background.png" class="w-22 h-9"></li>
     <li class="flex"><a href="/" class="nav-link p-1 px-3.5 my-2.5 rounded-2xl transition duration-400 active">Home</a></li>
     <li class="flex"><a href="#" class="nav-link p-1 px-3.5 my-2.5 rounded-2xl transition duration-400">Explores</a></li>
     <li class="flex"><a href="#" class="nav-link p-1 px-3.5 my-2.5 rounded-2xl transition duration-400">Trending</a></li>
     <!-- Navbar Search-box -->
     <li class="flex items-center"><input type="search" id="nav-searchbox" placeholder="Search" class="px-3 py-1.5 m-3 w-80 rounded-3xl outline-none"></li>
   </ul>
   <!-- Right nav -->
   <ul class="flex items-center mr-4">
     <?php if (isset($username)) : ?>
       <li class="flex"><a href="#" class="nav-link p-1 px-3.5 my-2.5 rounded-2xl transition duration-400 text-sm flex justify-center items-center"><span class="material-icons">person</span></a></li>
       <li class="flex"><a href="#" id="settings-icons" class="nav-link p-1 px-3.5 my-2.5 rounded-2xl transition duration-400 flex justify-center items-center"><span class="material-icons">settings</span></a>
         <ul id="drop-menu" class="drop-menu flex-col absolute hidden rounded-sm drop-shadow-md">
           <li class="flex"><a href="#" class="drop-link p-1 px-8 transition duration-400 flex justify-center items-center">settings</a></li>
           <li class="flex"><a href="#" class="drop-link p-1 px-8 transition duration-400 flex justify-center items-center">Accounts</a></li>
           <li class="flex"><a href="#" class="drop-link p-1 px-8 transition duration-400 flex justify-center items-center">Helps</a></li>
           <li class="flex"><a href="/logout" class="drop-link p-1 px-8 transition duration-400 flex justify-center items-center"><span class="material-icons">logout</span></a></li>
         </ul>
       </li>
     <?php else : ?>
       <li class="flex"><a href="/login" class="nav-link p-1 px-3.5 my-2.5 rounded-2xl transition duration-400">Login</a></li>
       <li class="flex"><a href="#" class="nav-link p-1 px-3.5 my-2.5 rounded-2xl transition duration-400">Register</a></li>
     <?php endif ?>
   </ul>
 </nav>
 <!-- Navigation End -->