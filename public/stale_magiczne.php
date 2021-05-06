<?php
//Stałe tworzymy przy użyciu funkcji define().
define('NAZWA', 'wartość stała');
echo NAZWA . PHP_EOL;

define('nazwa', 'wartość stała2');
echo nazwa. PHP_EOL;
//wielkość liter ma znaczenie!! przyjelo sie nazywać stałe wielkim
//Stałe nie mogą zostać zmienione podczas działania skryptu. Stałymi mogą być dane typów skalarnych.

echo __LINE__ . PHP_EOL; //aktualna linia w pliku, numer wiersza tu 11

echo __FILE__ .PHP_EOL; //- pełna ścieżka do pliku ->/home/wwwroot/sf/public/stale_magiczne.php
echo __DIR__ .PHP_EOL ;//- ścieżka do katalogu zawierajacego plik = wszystko poza nazwą pliku->/home/wwwroot/sf/public, równoważne wywołaniu dirname(__FILE__)

// --> dirname funkcja zwraca ścieżke do katalogu zawierającego plik, wszystko poza nazwą pliku
//--> basename funkcja zwraca nazwę pliku

echo dirname(__FILE__) . PHP_EOL; //  /home/wwwroot/sf/public
echo dirname(dirname(__FILE__)) . PHP_EOL; //  /home/wwwroot/sf
echo dirname(dirname(dirname(__FILE__))) . PHP_EOL; //  /home/wwwroot
echo dirname(dirname(dirname(dirname(__FILE__)))). PHP_EOL; //  /home

$sciezka = "/home/wwwroot/sf/public/stale_magiczne.php";
echo dirname($sciezka) . PHP_EOL;
echo basename($sciezka). PHP_EOL;
?>