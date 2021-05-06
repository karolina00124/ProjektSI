<?php declare(strict_types=1);

require_once __DIR__ . '/dog.php';

$dog = new Dog ('Burek');

echo 'Dog name: ' . $dog->getName() .PHP_EOL;
$dog->bark();
echo PHP_EOL;
