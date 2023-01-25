<?php
function routeToPage(string $value, array $routes)
{
    // This is a page router function.
    if (array_key_exists($value, $routes)) {
        // If the page exist then route to the page.
        return require($routes[$value]);
    } else {
        echo abort();
        dump_die();
    }
}

// Variables with the server Info
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
// $routes = require("utils/config.php");
// Routing the path based on URI
