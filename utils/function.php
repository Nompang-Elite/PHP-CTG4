<?php

function dump_die($value = null)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function abort($code = 404)
{
    return http_response_code($code);
}
