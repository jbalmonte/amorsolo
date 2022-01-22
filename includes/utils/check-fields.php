<?php

use function PHPSTORM_META\type;

function checkFields($array)
{
    $result = [];
    echo (type($array));
    foreach ($array as $key => $value) {
        $result[] =  boolval($value);
    }

    return in_array(false, $result);
}
