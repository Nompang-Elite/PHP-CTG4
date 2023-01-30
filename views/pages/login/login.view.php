<?php
require("./views/partials/header.php");
require("./views/partials/navbar.php");
?>


<main>

    <!-- Contents -->
    <form action="/login" method="post">
        <div>
            <input type="text" name="email" id="email" placeholder="Email Address">
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <button type="submit" class="p-2 border-2">SigIn</button>
    </form>

</main>


<?php
require("./views/partials/footer.php");
?>