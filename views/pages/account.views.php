<div class="w-full h-full p-10">

    <div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl sm:px-12 dark:bg-primary dark:text-gray-100">
        <img src="data:image/png;base64,<?= base64_encode($pfImage) ?>" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
        <div class="space-y-4  divide-y divide-gray-700">
            <div class="my-2 space-y-1 text-center">
                <h2 class="text-xl font-semibold sm:text-2xl"><?= $username ?></h2>
                <p class="px-5 text-xs sm:text-base dark:text-gray-400"><?= $accountType === 1 ? 'Customers' : 'Seller' ?></p>
            </div>
            <div class="my-10 space-y-2 pt-2">
                <p class="text-md">First Name: <?= $firstName ?></p>
                <p class="text-md">Last Name: <?= $lastName ?></p>
                <p class="text-md">Email: <?= $email ?></p>
                <p class="text-md">Birth Date: <?= $birthDate ?></p>
            </div>
        </div>
    </div>

</div>