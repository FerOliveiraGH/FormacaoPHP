<?php

spl_autoload_register(function(string $class) {
    $filePath = (str_replace('Banco',  'src', $class));
    $filePath = (str_replace('\\', DIRECTORY_SEPARATOR, $filePath));
    $filePath .= '.php';

    if (file_exists($filePath)) {
        require_once $filePath;
    }
});