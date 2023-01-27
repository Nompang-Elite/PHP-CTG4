<!-- // -->
<?php
$header = "Home";
require("views/partials/header.php");
?>

<!-- Home contents -->
<main class="h-screen">
    <section class="flex h-screen">
        <div class="flex w-full items-center justify-center lg:py-0 ">
            <div class="flex felx-row rounded-lg justify-center h-full w-full">
                <div class="flex items-center bg-black justify-center flex-col w-5/6  md:space-y-6 sm:p-8 max-[640px]:hidden">
                    <div class="flex items-center justify-center">
                        <img src="image/image_2023-01-26_19-59-35.png" alt="" class="w-1/4">
                    </div>
                </div>
                <div class="flex bg-white items-center justify-center flex-col p-6 w-1/2 space-y-4 md:space-y-6 sm:p-8  max-[640px]:w-full">
                    <h1 class="text-xl font-bold leading-tight text-center">
                        Please Register Here!
                    </h1>
                    <form class="space-y-4 md:space-y-6 w-full" action="#">
                        <div class="flex mb-6">
                            <div class=" w-full md:w-1/2 px-2 mb-6 md:mb-0">
                                <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                <input type="text" name="firstName" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="first name " required="">
                                <small><?php echo $firstNameError; ?></small>
                            </div>
                            <div class=" w-full md:w-1/2 px-2 mb-6 md:mb-0">
                                <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                <input type="text" name="lastName" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder=" last name " required="">
                                <small><?php echo $lastNameError; ?></small>
                            </div>
                        </div>
                        <div class=" md:w-1/1 px-2" style="margin-top: -1rem;">
                            <label for="gender" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                            <select id="gender" name="gender" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                <option selected disabled>Choose your gender</option>
                                <option value="US">Male</option>
                                <option value="CA">Female</option>
                            </select>
                            <small><?php echo $genderError; ?></small>
                        </div>
                        <div class="flex mb-6" style="margin-top: 10px;">
                            <div class="w-full md:w-1/2 px-2 mb-6 md:mb-0">
                                <label for="date" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Date of birth</label>
                                <input type="date" name="date" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="date " required="">
                                <small><?php echo $dateError; ?></small>
                            </div>
                            <div class="  w-full md:w-1/2 px-2 mb-6 md:mb-0">
                                <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">country</label>
                                <select id="countries" name="city" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                                    <option selected disabled>Choose a country</option>
                                    <option value="US">Cambodia</option>
                                    <option value="CA">Canada</option>
                                    <option value="FR">France</option>
                                    <option value="DE">Germany</option>
                                </select>
                                <small><?php echo $cityError; ?></small>
                            </div>
                        </div>
                        <div class=" md:w-1/1 px-2" style="margin-top: 10px;">
                            <label for="number" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Number</label>
                            <input type="text" name="phoneNumber" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="phone number " required="">
                            <small><?php echo $phoneNumberError; ?></small>
                        </div>
                        <div class=" md:w-1/1 px-2" style="margin-top: 10px;">
                            <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Input your email " required="">
                            <small><?php echo $emailError; ?></small>
                        </div>
                        <div class="flex mb-6" style="margin-top: 10px;">
                            <div class=" w-full md:w-1/2 px-2 mb-6 md:mb-0">
                                <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="password " required="">
                                <small><?php echo $passwordError; ?></small>
                            </div>
                            <div class="  w-full md:w-1/2 px-2 mb-6 md:mb-0">
                                <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                                <input type="password" name="comfirmPassword" id="countries" class="bg-gray-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Confirm password " required="">
                                <small><?php echo $confirmPasswordError; ?></small>
                            </div>
                        </div>
                        <button type="submit" class="w-full rounded-lg text-sm p-1.5 text-center bg-blue-500">Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require("views/partials/footer.php");
?>