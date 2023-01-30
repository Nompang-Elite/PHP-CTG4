<?php
function routeToPage(string $value, array $routes)
{
    // This is a page router function.
    if (array_key_exists($value, $routes)) {
        // If the page exist then route to the page.
        return require($routes[$value]);
    }
}
