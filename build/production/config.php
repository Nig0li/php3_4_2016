<?php

return [
    'domain' => 'test.com',
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => '{{db.user}}',
            'password' => '{{db.password}}',
            'dbname' => 'fw',
        ]
    ],
    'mail' => [
        'method' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'secure' => 'ssl',
        'auth' => [
            'username' => 'po4ta.rus.63@gmail.com',
            'password' => '{{mailpassword}}',
        ],
        'sender' => 'Ольга',
    ]
];