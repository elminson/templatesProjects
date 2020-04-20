<?php
require_once __DIR__ . '/bootstrap.php';

//Products data can come from json. db or api
$products = json_decode(file_get_contents("products.json"));

$template = $twig->load('products.html.twig');
echo $template->renderBlock('content', array('products' => $products));
