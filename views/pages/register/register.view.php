<?php
require("./views/partials/header.php");
require("./views/partials/navbar.php");
?>


<main>

    <!-- Contents -->
    <form action="/register" method="post">
        <div>
            <input type="text" name="firstName" max="30" min="1" id="firstName" placeholder="First Name" required>
            <input type="text" name="lastName" max="30" min="1" id="lastName" placeholder="Last Name" required>
        </div>
        <div>
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="text" name="email" id="email" placeholder="Email Address" required>
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Create Password" required>
            <input type="password" name="confirmPass" id="confirmPass" placeholder="Confirms Password" required>
        </div>
        <div>
            <div>
                <input type="radio" name="gender" id="maleRadio" required>
                <label for="maleRadio">Male</label>
            </div>
            <div>
                <input type="radio" name="gender" id="femaleRadio" required>
                <label for="femaleRadio">Female</label>
            </div>
        </div>
        <div>
            <input type="date" name="birthDate" required>
        </div>
        <button type="submit" class="p-2 border-2">Register</button>
    </form>

</main>


<?php
require("./views/partials/footer.php");
?>