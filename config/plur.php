<?php

return [
    'version' => 'build.181016',

    'hash_size_1'   => 6, // >= 1
    'hash_size_2'   => 7, // >= 0
    'hash_alphabet' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

    'domains_blocked' => [
        'bit.ly',
        'bitly.is',
        'is.gd',
        'adf.ly',
        'goo.gl',
        'ow.ly',
        'j.mp',
        't.co',
        $_SERVER['SERVER_NAME'],
    ],
];
