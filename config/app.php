<?php

return [
    'database' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'dbname' => 'register',
        'username' => 'root',
        'password' => ''
    ],
    'mail' => [
        'transport' => 'smtp',
        'encrption' => 'tls',
        'port' => 587,
        'host' => 'smtp.gmail.com',
        'username' => 'ksbcell12@gmail.com',
        'password' => 'cefoekzqwwzmouyv',
        'from' => 'no-reply@devscreencast.com',
        'sender_name' => 'User Authentication'
    ],
    // 'recaptcha' => [
    //     'key' => '6LdwurwiAAAAAK-w8mv7JGaYZZhcLraqEAamWJ8w',
    //     'secret' => '6LdwurwiAAAAAL0arp-vtnqSXop_l5HYq3VmLI8w',
    // ]
];
