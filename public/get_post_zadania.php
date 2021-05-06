<?php
$GET='tralala';
$name = !empty($_GET['name']) ? $_GET['name'] : 'World';

echo 'Hello ' . $name . ' !';

//null coalescing operator zamiast operatora tenarnego

// !empty -> istnieje i nie null

$name2 = $_GET['name'] ?? 'World';


//Z pomocą null coalescing operator napisz jeden skrypt, który obsługuje zarówno żądania POST jak i GET

///?????
//$zm = $_GET['name'] ?? $_POST['name'];


echo (isset($foo) ? $foo : null) . PHP_EOL;