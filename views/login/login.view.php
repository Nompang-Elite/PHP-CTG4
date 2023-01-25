<?php
$header = "Home";
require("views/partials/header.php");
?>

<section class="flex h-screen">
    <div class="flex w-full items-center justify-center pl-6 bg-slate-700 lg:py-0">
        <div class="flex felx-row shadow-2xl rounded-lg bg-white justify-center h-3/4 w-4/6">
            <div class="p-6 w-3/5 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-red-600 font-bold leading-tight text-center tracking-tight md:text-2xl">
                    Welcome to YAYAConcert
                </h1>
                <p class="text-center">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quam hic praesentium voluptas,
                    nostrum natus blanditiis commodi, deserunt dicta iste expedita pariatur? Ipsam harum quaerat facilis
                    tempora maiores voluptas corporis.
                </p>
                <p class="text-center">Thank for your support!</p>
            </div>
            <div class="p-6 w-2/5 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight text-center">
                    Log in to your account
                </h1>
                <form class="space-y-4 md:space-y-6 w-full" action="#">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="grid justify-items-end">
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                            password?</a>
                    </div>
                    <button type="submit" class="w-full rounded-lg text-sm px-5 py-2.5 text-center bg-blue-500">Sign
                        in</button>
                    <hr>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                        Need an account? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Create a new account</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require("views/partials/footer.php") ?>