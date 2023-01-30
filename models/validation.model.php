<?php
function sanitizeValue(array $array): array
{
    $sanitized = [];
    foreach ($array as $key => $value) {
        $sanitized[$key] = htmlspecialchars($value);
    };
    return $sanitized;
}
