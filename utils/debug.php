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
