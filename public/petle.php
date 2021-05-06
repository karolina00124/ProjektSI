<?php

//INSTRUKCJA WARUNKOWA
echo "---INSTRUKCJA WARUNKOWA IF ---" .PHP_EOL;

$a = 1;
$b = 2;

if ($a > $b) { //warunek
    echo '$a is greater than $b '."\n";
} elseif ($a == $b) {
    echo '$a equals $b' . "\n";
} else { //w przeciwnym wypadku
    echo '$a is less than $b' . "\n"; //zostanie wypisane
}

//Składnia alternatywna if
//
//skladnia alternatywna stosowana jest w w szablonach
//kiedy php jest wymieszany z html wiemy skad jest }

//pierwszy nawias klamrowy pętli zamieniamy na : i zamiast ostatniej klamry } piszemy end...
//endif - struktura kontrolna

echo "--+ IF alternatywna +--" .PHP_EOL;

$a = 1;
$b = 2;

if ($a > $b):  //{
    echo '$a is greater than $b' ."\n";
elseif ($a == $b):    //{
    echo '$a equals $b' ."\n";
else: //{
    echo '$a is less than $b' ."\n";
endif;  //}

for ($i = 0; $i < 10; $i++) {
    echo $i % 2 == 0 ? $i . ' ' : '';
}

echo PHP_EOL;


//PĘTLE

//WHILE
//wykonuj do spełnienia warunku

echo "---WHILE ---" .PHP_EOL;

$counter = 0;

while ($counter < 3) {
    echo $counter++ . PHP_EOL;
}
//składnia alternatywna while
echo "--+ WHILE alternatywna +--" .PHP_EOL;

$counter = 0;

while ($counter < 3):
    echo $counter++ . PHP_EOL;
endwhile; // }

//DO WHILE
//sprawdza warunek po pierwszym wykonaniu pętli

echo "---DO-WHILE---" .PHP_EOL;

$counter = 0;

do {
    echo $counter++ . PHP_EOL;
} while ($counter < 3);

//FOR
//wstępna wartość licznika; warunek ;jak zmienia się licznik

echo "---FOR---" .PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    echo $i . PHP_EOL;
}


//składnia alternatywna for
echo "--+ FOR alternatywna +--" .PHP_EOL;

for ($i = 0; $i < 10; $i++):
    echo $i . PHP_EOL;
endfor;

//przeglądanie zawartości w tablicy przy pomocy pętli for
echo "---FOR TABLICA---" .PHP_EOL;

$tab = ['apple', 'orange', 'plum'];
for ($i = 0, $size = count($tab); $i < $size; $i++) {  //licznik, zmienna= ilość rekordów w tablicy, warunek, ikrementacja
    echo $tab[$i] . PHP_EOL;
}

echo "---FOREACH---" .PHP_EOL;
//FOREACH
//do przeglądania zawartości tablic i obiektów
// każdy z elementów tablicy jest przenoszony do tworzonej przez pętlę zmiennej
//zmienne są tymczasowe, po wyjściu z pętli przestają istnieć


$tab = ['one', 'two', 'three'];
foreach ($tab as $value) {   //zmienna nazwy tabeli as zmienna pod którą będą wartości z tabeli
    echo $value . PHP_EOL;
}

echo "------" .PHP_EOL;

foreach ($tab as $key => $value) {  //zmienna nazwy tabeli as zmienna pod którą będą indeksy => zmienna pod którą będą wartości z tabeli
    echo $key . $value ; //indeks, wartość pod indeksem //jak przy tab asocjacyjnych
    echo PHP_EOL;
}
echo "--skladnia alternatywna foreach--" .PHP_EOL;

$tab = ['one', 'two', 'three'];
foreach ($tab as $value):  //{
    echo $value . PHP_EOL;
endforeach; //}

//tablica asocjacyjna
echo "--foreach dla tablicy asocjacyjnej--" .PHP_EOL;

$persons = [
    [
        'first_name' => 'Ann',  //obie wartosci znajduja sie pod indeksem 0
        'surname' => 'Smith',
    ],
    [
        'first_name' => 'John',
        'surname' => 'Doe',
    ],
];

foreach ($persons as $row) {  //każdy z elementów tablicy jest przenoszony do tworzonej przez pętlę zmiennej

    foreach ($row as $key => $value) {  //klucz to zmienna, w której umieszczony zostanie indeks elementu tablicy tu string //wartość pod danym indeksem
        echo $key . ' : ' . $value . PHP_EOL;
    }
}
echo "----błąd-----" . PHP_EOL;

    foreach ($persons as $key => $value) {  //nie zadziała w przypadku tab asocjacyjnej gdzie jest więcej wartości pod jednym indeksem
        echo $key . ' : ' . $value . PHP_EOL;
    }


//modyfikacja rekordów

echo "---zadanie1---" .PHP_EOL;
//porównaj działanie kodów


$tab = ['one', 'two', 'three'];
foreach ($tab as $value) {
    $value .= '_four';  //$a .= $b; 	$a = $a . $b;
}
//brak ampersanda = & = odniesienia do miejsca w pamięci, string dopisuje się do zmiennej NIE do tablicy
//Rekordy NIE zmodyfikują się

//unset($value);  //funkcja niszcząca zmienną -------------> ?????????

var_dump($value);
var_dump($tab);

echo "------" .PHP_EOL;
//prawidłowa modyfikacja rekordów

$tab = ['one', 'two', 'three'];
foreach ($tab as &$value) {  //ampersand
    $value .= '_four';
}
//ampersand = & = odniesienie do miejsca w pamięci, string dopisze się do rekordów

//unset($value);

var_dump($value);
var_dump($tab);

//BREAK
//kończy działanie instrukcji
//wyjście z pętli

echo "---BREAK---" . PHP_EOL;
$tab = ['one', 'two', 'three'];
foreach ($tab as $value) {
    if ('two' === $value) {
        break;              //koniec pętli wypisze tylko one
    } else {
        echo $value . PHP_EOL;
    }
}

//CONTINUE
//przerywa instrukcję, wychodzi z niej i zaczyna następną
//wyjście z bierzącej iteracji


echo "---CONTINUE---" . PHP_EOL;

$counter = 0;
while ($counter < 10) {
    if ($counter % 2 == 0) {
        $counter++;
       continue; //przerywa pętle i jeszcze raz sorawdza warunek
    } else {
        echo $counter . PHP_EOL;
        $counter++;
    }
    //$counter++;  //błąd continue odnosi się do całej najbliższej pętli => counter sie nie zwiększał
}

//SWITCH
//opcje do wyboru

echo "---SWITCH---" . PHP_EOL;
$i = 1;
switch ($i) {
    case 0:
        echo 'i equals 0'. PHP_EOL;
        break; //po instrukcji
    case 1:
        echo 'i equals 1'. PHP_EOL;
        break;
    case 2:
        echo 'i equals 2'. PHP_EOL;
        break;
    default:
        break;
}

//równoważne z:
$i = 1;
if (0 === $i) {
    echo 'i equals 0'. PHP_EOL;
} elseif (1 === $i) {
    echo 'i equals 1'. PHP_EOL;
} elseif (2 === $i) {
    echo 'i equals 2'. PHP_EOL;
}


//INCLUDE, REQUIRE
//Załączenie pliku

//require działa tak samo jak include z tą różnicą, że w przypadku błędu zwraca krytyczny błąd kompilacji, podczas gdy include tylko ostrzeżenie co pozwala na nieprzerywanie działania skryptu.

//require - FATAL_ERROR;
require('ścieżka do pliku który chcemy załączyć');
//lub
require 'ścieżka do pliku który chcemy załączyć'; //is a statement, not a function. It's not necessary to write ()

require('plik.php');
require 'plik.php';
require('./plik.php');
require('../folder/plik.php');

require (dirname(__FILE__) . '/folder/plik.php');
require dirname(__FILE__) . '/folder/plik.php';
require dirname(dirname(__FILE__)) . '/folder/plik.php'; //używamy konkatenacji aby polaczyc wynk dirname i resztę ścieżki

//include - Warning; wykona całość nawet, gdy plik nie zostanie dołączony
include("plik.php");

//////!!!!!!!//////
//require_once, include_once
//mimo kilku wywołań w jednym skrypcie, plik zostanie załączony wyłącznie raz
//zalecane używanie!


//kartkówka
echo "---------". PHP_EOL;

$i = 1;
while ($i <= 10):
    echo $i % 2 ? $i . ' ' : ''; //operator tenarny //echo (warunek) ? opcja 1 :  opcja 2;
    $i++;
endwhile;

echo PHP_EOL;



$i = 2;
while ($i < 11):
    echo $i % 2 == 0 ? $i . ' ' : '';
    $i++;
endwhile;
echo PHP_EOL;
?>

<?php
for ($i = 0; $i < 10; $i++) {
    if ($i % 2) {
        echo $i . ' ';
    }
}
echo PHP_EOL;


/*

if ($a === $b) {
//...echo
} elseif ($a > $b) {
//...
} else {
//...
};
//składnia alternatywna

if ($a === $b) {
//...echo
} elseif ($a > $b) {
//...
} else {
//...
} endif; //struktura kontrolna- skladnia alternatywna stosowana w szablonach //kiedy php jest wymieszany z html wiemy skad jest }
*/


?>