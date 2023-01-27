<?php
function sanitizeValue(array $array): array
{
    $sanitized = [];
    foreach ($array as $value) {
        array_push($sanitized, $value);
    };
    return $sanitized;
}
