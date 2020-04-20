<?php

// Load our autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Specify our Twig templates location
$loader = new \Twig\Loader\FilesystemLoader('templates');

// Instantiate our Twig
$twig = new \Twig\Environment($loader, [
    'cache' => 'compiled_cache',
    'auto_reload' => true,
    'debug' => true,
]);
