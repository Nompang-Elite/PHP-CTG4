<div class="w-full h-full p-10">

    <div class="p-10 w-fit border-2 rounded-lg">
        <div class="flex items-center space-x-4">
            <img src="data:image/png;base64,<?= base64_encode($pfImage) ?>" alt="" class="w-20 h-20 rounded-full border-2">
            <div>
                <p>Username: <?= $username ?></p>
                <p>Account: <?= $accountType === 1 ? 'Customers' : 'Seller' ?></p>
            </div>
        </div>
        <div class="my-10">
            <p class="text-md">First Name: <?= $firstName ?></p>
            <p class="text-md">Last Name: <?= $lastName ?></p>
            <p class="text-md">Email: <?= $email ?></p>
            <p class="text-md">Birth Date: <?= $birthDate ?></p>
        </div>

    </div>

</div>