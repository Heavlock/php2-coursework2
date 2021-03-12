<?php

function array_get(array $array, string $key, $default = 'null')
{
    $keys = explode('.', $key);
    $value = $array;
    foreach ($keys as $key) {
        $value = $value[$key];
    }
    if ($value) {
        return $value;
    }
    return $default;
}