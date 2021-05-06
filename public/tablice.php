<?php
//tablica ideksowana numerycznie
$tab = ['a', 'b', 'c', 'd']; //wartość a pod indeksem 0, wartosc b pod indeksem 1 itd.
var_dump($tab);
echo PHP_EOL;
//zapis asocjacyjny
$tab2 = [0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd'];
var_dump($tab2);

$tab3 = [];
$tab3[] = 'a';
$tab3[] = 'b';
$tab3[] = 'c';
$tab3[] = 'd';
$tab3 = [];
$tab3[77] = 'e';
var_dump($tab3); //elementy się nadpiszą, wyświetli tylko e

//tablica pusta -> array(0)
$tab0 = [];
var_dump($tab0);
echo PHP_EOL;
?>

<?php
//tablica asocjacyjna
$tabela = ['first_name' => 'John', 'surname' => 'Doe',]; //indeks=>wartość indeksu
var_dump($tabela);
//string imie to indeks
echo PHP_EOL;

$persons = [
    [
        'first_name' => 'Ann', //obie wartosci znajduja sie pod indeksem 0
        'surname' => 'Smith',
    ],
    [
        'first_name' => 'John', //obie wartosci znajduja sie pod indeksem 1
        'surname' => 'Doe',
    ],
];
var_dump($persons);
?>
