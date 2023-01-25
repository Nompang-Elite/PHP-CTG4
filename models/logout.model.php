<?php
function logout(string $headTo)
{
    /*
    * Funtion description:
    * @param type string $headTo
    * @return void
    */

    // Logout by destroying the session.
    session_destroy();
    // Route to the located page after logout
    header("location:{$headTo}");
}
