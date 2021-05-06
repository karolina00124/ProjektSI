<?php declare(strict_types=1);

require_once dirname(__FILE__) . '/klasy.php';

$myShip = new Ship();  //referencja
$myShip->name = 'Bluenose';
$myShip->homeport = 'Lunenburg';

echo 'Ship name: ' . $myShip->name; //wypisanie obiektu i wartości

var_dump($myShip);

$Ship2 = $myShip;  //referencja
$Ship2->name = 'innna2';
$Ship2->homeport = 'inna2';


var_dump($myShip);

var_dump($Ship2);