<?php

//TABLICA NUMERYCZNA

echo "------tab numeryczna------". PHP_EOL;

$tab = [
    'Python',
    'Java',
    'C++',
    'PHP',
];

foreach ($tab as $item) {    //zmienna nazwy tabeli as zmienna pod którą będą wartości z tabeli
    echo $item . PHP_EOL;
}
/*wyświetli
Python
Java
C++
PHP
*/

foreach ($tab as $key => $value) {  //zmienna nazwy tabeli as index (numeryczny) => zmienna pod którą będą wartości z tabeli
    echo $key . ' : ' . $value . PHP_EOL;
}

/*wyświetli
0 : Python
1 : Java
2 : C++
3 : PHP
*/

//TABLICA ASOCJACYJNA
// możemy nadać wartość indeksom

echo "------tab asocjacyjna------". PHP_EOL;

$person = [
    'first_name' => 'Mark',
    'surname' => 'Brown',
    'age' => '21',
];

foreach ($person as $field) {  //zmienna nazwy tabeli as zmienna pod którą będą wartości z tabeli
    echo $field . PHP_EOL;
}
/*wyświetli
Mark
Brown
21
*/

foreach ($person as $key => $value) {  //zmienna nazwy tabeli as index (przypisany) => zmienna pod którą będą wartości z tabeli
    echo $key . ' : ' . $value . PHP_EOL;
}

/*wyświetli
first_name : Mark
surname : Brown
age : 21
*/

echo "------zadanie 1------". PHP_EOL;
//kiedy tablica asocjacyjna ma do jednego key przypisane różne wartości -> kilka "podtablic"
//tu kilka osób

$persons = [
    [
        'first_name' => 'Mark',
        'surname' => 'Brown',
        'age' => '21',
    ],
    [
        'first_name' => 'John',
        'surname' => 'Doe',
        'age' => '22',
    ],
    [
        'first_name' => 'Ann',
        'surname' => 'Smith',
        'age' => '18',
    ],
];

//nie da się wypisać od razu
//foreach ($person as $key => $value) //błąd


foreach ($persons as $row) {
    foreach ($row as $key => &$value) {
        if ($key === 'age') {
            $value = $value + 8;
            echo $key . ' : ' . $value . PHP_EOL;}
            elseif ($key === 'first_name') {
                echo $key . ' : ' . strtoupper($value). PHP_EOL;
            }
        else {
            echo $key . ' : ' . $value . PHP_EOL;
        }

    }
}
//zadanie1
//Dla tablicy $persons, przy użyciu funkcji strtoupper(), wypisz imiona dużymi literami.

//Dla tablicy $persons, zwiększ każdemu wiek o rok, a następnie wypisz tablicę na ekranie. Podpowiedź: użyj operatora &.



//STRTOUPPER
//działa na stringach

echo "------strtoupper------". PHP_EOL;

$str = "Mary Had A Little Lamb and She LOVED It So";
$str2 = strtoupper($str);
echo $str2 . PHP_EOL; // wyświetli -> MARY HAD A LITTLE LAMB AND SHE LOVED IT SO

echo "------sortowanie-tablic------". PHP_EOL;

/*$tablica = [
    'B' => 1,
    'A' => 3,
    'C' => 2,
    'D' => 5,
    'E' => 4
];

* rosnąco:

      sort      asort       ksort
       1         B.1         A.3
       2         A.2         B.1
       3         C.3         C.2

* malejąco:

     rsort      arsort      krsort
       3         C.3         C.3
       2         A.2         B.1
       1         B.1         A.2

 */


echo "------tablice------". PHP_EOL;

$tab1 = [
    'Zuza',
    'Dawid',
    'Artur'
];
foreach ($tab1 as $item) {
    echo $item . PHP_EOL;
}

//SORTOWANIE TABLIC

//SORT
// Sortuje tablice rosnąco.
echo "------sort------". PHP_EOL;

sort($tab1);

foreach ($tab1 as $item) {
  echo $item . PHP_EOL;
}

/* wyświetli
 * Artur Dawid Zuza
 *
 * !!! ksort i asort dadzą ten sam wynik !!!
 */



//RSORT
// Sortuje tablice malejąco.
echo "------rsort------". PHP_EOL;
rsort($tab1);

foreach ($tab1 as $item) {
    echo $item . PHP_EOL;
}

/* wyświetli
 * Zuza Dawid Artur
 *
 * !!! krsort i arsort dadzą ten sam wynik !!!
 */

//SORTOWANIE TABLIC ACOCJACYJNYCH
//ksort i krsort - według indexu = klucza (according to key)
//asort i arsort - według wartości (according to value)

echo "---tablice-asocjacyjne---". PHP_EOL;

$tab2_asocjacyjna = [
    'B' => 1,
    'A' => 3,
    'C' => 2,
    'D' => 5,
    'E' => 4
];


foreach ($tab2_asocjacyjna as $key => $value)
{
    echo $key . ' : ' . $value . PHP_EOL;
}

//rosnąco
echo "------sortowanie-rosnąco------". PHP_EOL;

//KSORT
//Sortuje tablice asocjacyjne rosnąco według klucza = indexu

echo "------ksort------". PHP_EOL;

ksort($tab2_asocjacyjna);

foreach ($tab2_asocjacyjna as $key => $value)
{
    echo $key . ' : ' . $value . PHP_EOL;
}
/* wyświetli
 * A : 3
   B : 1
   C : 2
   D : 5
   E : 4
 *
 * !!! sort - posortuje rosnąco wartości, nie wyświetli poprawnych indexów!!!
 */


//ASORT
//Sortuje tablice asocjacyjne rosnąco według wartości = value

echo "------asort------". PHP_EOL;

asort($tab2_asocjacyjna);

foreach ($tab2_asocjacyjna as $key => $value)
{
    echo $key . ' : ' . $value . PHP_EOL;
}
/* wyświetli
 *  B : 1
    C : 2
    A : 3
    E : 4
    D : 5
 *
 * !!! sort - posortuje rosnąco wartości, nie wyświetli poprawnych indexów!!!
 */

//malejąco
echo "------sortowanie-malejąco------". PHP_EOL;

//KRSORT
//Sortuje tablice asocjacyjne malejąco według klucza = indexu

echo "------krsort------". PHP_EOL;

krsort($tab2_asocjacyjna);

foreach ($tab2_asocjacyjna as $key => $value)
{
    echo $key . ' : ' . $value . PHP_EOL;
}
/* wyświetli
 *  E : 4
    D : 5
    C : 2
    B : 1
    A : 3
 *
 * !!! rsort - posortuje malejąco wartości, nie wyświetli poprawnych indexów!!!
 */


//ASORT
//Sortuje tablice asocjacyjne malejąco według wartości = value

echo "------arsort------". PHP_EOL;

arsort($tab2_asocjacyjna);

foreach ($tab2_asocjacyjna as $key => $value)
{
    echo $key . ' : ' . $value . PHP_EOL;
}
/* wyświetli
 *  D : 5
    E : 4
    A : 3
    C : 2
    B : 1
 *
 * !!! sort - posortuje malejąco wartości, nie wyświetli poprawnych indexów!!!
 */


//ZADANIA

echo "------zadanie1------". PHP_EOL;
//przesortuj w porządku leksykalnym

$tab = ['plum', 'orange', 'banana', 'apple'];
sort($tab);
foreach ($tab as $item){
    echo $item .PHP_EOL;

}
echo "\n";
//raczej nieużywane opcje bo ksort i asort do asocjacyjnych

asort($tab);
foreach ($tab as $item){
    echo $item .PHP_EOL;
}
echo "\n";

ksort($tab);
foreach ($tab as $item){
    echo $item .PHP_EOL;
}

echo "------zadanie2------". PHP_EOL;
//przesortuj w porządku leksykalnym

$tab = ['first_name' => 'Mark',
        'surname' => 'Brown',
        'age' => '21'];

//sort($tab2_asocjacyjna); nie zadziała!!

foreach ($tab as $key => $value) {
    echo $key . " = " . $value . PHP_EOL;
}

asort($tab);
foreach ($tab as $key => $value){
    echo $value .PHP_EOL;
}
echo "\n";

ksort($tab);
foreach ($tab as $key => $value){
    echo $key .PHP_EOL;
}

echo "------filtrowanie------". PHP_EOL;

// FILTROWANIE TABLICY

// array_filter()
// funkcja filtruje wartości z tablicy przy użyciu funkcji dla wywołania zwrotnego.
//Funkcja ta przechodzi każdej wartości tablicy wejściowe funkcji połączenia zwrotnego.
// Jeśli funkcja zwrotna zwraca true, bieżąca wartość z wejścia jest zwracana do tablicy wynikowej.
// Klucze tablicy są zachowane.



$data = range(1, 10); //range tworzy tablice od do co krok (domyślnie co 1)
var_dump($data);
/**
 * Checks if value is odd.
 *
 * @param int $value Value
 *
 * @return int Result
 */
function is_odd(int $value) : int
{
    return ($value % 2);
}

echo "------przefiltrowana------". PHP_EOL;

// array_filter(tablica, funkcja wg ktorej filtrujemy)

var_dump(array_filter($data, 'is_odd'));

echo "----zmiany nie zapisują się-----". PHP_EOL;

var_dump($data);
?>