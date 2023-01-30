<?php

function dum_die(mixed $value = null): void
{
    /*
        Function: Debug
        @param type mixed $value
        @return void
    */
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    die();
}
function abort($code = 404)
{
    return http_response_code($code);
}
