<?php

function fullPath($file_path = "")
{
    $full_path =
        $_SERVER['DOCUMENT_ROOT'] . '/' .
        'volta-ao-mundo-australia' . '/' .
        $file_path;

    return $full_path;
}
