<?php

$context = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

$file = 'zip://arquivo.zip#arquivo.txt';

echo file_get_contents($file, false, $context);