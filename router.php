<?php
$uri = parse_url($_SERVER["REQUEST_URI"]);
$routes = require("./utils/config.php");

function routeToPage(string $value, array $routes)
{
    // This is a page router function.
    if (array_key_exists($value, $routes))
    {
        // If the page exist then route to the page.
        require($routes[$value]);
    }
}