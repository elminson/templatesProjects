<?php
require_once __DIR__ . '/bootstrap.php';

echo $twig->render('name.html', ['name' => 'Elminson']);
