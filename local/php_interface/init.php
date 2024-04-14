<?php

define('INCLUDE_PATH', '/include');

function debug(mixed $data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
