<?php

require_once __DIR__ . '/cat.php';
require_once __DIR__ . '/dog.php';
//require_once __DIR__ . '/animal.php'; -> załączony wcześniej w cat i w dog

$anm = new Animal('Zwierzak');
echo 'Zwierzak robi: ';
$anm ->makeSound();
echo'<br>';

$cat = new Cat('Karmelek');
echo 'Karmelek robi: ';
$cat->makeSound();
echo'<br>';


$dog = new Dog('Azor');
echo 'Azor robi: ';
$dog->makeSound();
echo'<br>';
?>