<?php

$url = 'https://httpbin.org/post';

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => [
            'X-FROM: PHP',
            'Content-Type: application/json'
        ],
        'content' => '{"teste_do_corpo": "teste"}'
    ]
]);

echo file_get_contents($url, false, $context);