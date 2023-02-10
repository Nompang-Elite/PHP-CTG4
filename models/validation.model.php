<?php

function sanitizeVlues(array $listOfValues): mixed
{
    /**
     * Descriptions: Sanitized the input value to prevent code injection.
     * @param array $listOfvalues
     * @return mixed
     */

    $list = [];
    // Loop to clean each item in list:
    foreach ($listOfValues as $key => $value) {
        // Assign the cleaned item to $list:
        $list[$key] = htmlspecialchars($value);
    }
    // Return the array if true, else return null:
    return !empty($list) ? $list : null;
}

function validatePattern(string $value, string $pattern): bool
{
    /**
     * Descriptions: Validate the value to check for mathched pattern.
     * @param string $value
     * @param string $pattern
     * @return bool
     */

    // Validate and return bool if the values is matched or not:
    return (preg_match($pattern, $value) && $value !== null && !empty($value));
}
