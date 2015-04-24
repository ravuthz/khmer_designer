<?php

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'khmer_designer_db'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    ),
    'web' => array(
        'dir' => 'localhost/khmer_designer/',
        'pub' => 'localhost/khmer_designer/public/',
        'icon' => 'localhost/khmer_designer/images/profile.png',
        'title' => 'Khmer Designer',
        'tags' => 'khmer, designer, cambodia'
    )
);

?>