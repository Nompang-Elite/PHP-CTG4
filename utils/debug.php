<?php
// Simple Debuggin functions
function dump_die(mixed $values): void
{
    echo "<pre>";
    print_r($values);
    echo "<pre>";
    die();
}
