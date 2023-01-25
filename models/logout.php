<?php
function logout(string $headTo)
{
    // Logout by destroying the session.
    session_destroy();
    // Route to the located page after logout
    header("location:{$headTo}");
}