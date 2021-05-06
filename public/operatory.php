<?php

$a = 10;
$b = 2;
echo '-------OPERATORY ARYTMETYCZNE--------'. PHP_EOL;;

//OPERATORY ARYTMETYCZNE
var_dump(+$b) . PHP_EOL; //tożsamość - zwraca ta sama wartość
var_dump(-$b) . PHP_EOL;  //negacja
var_dump($a + $b) . PHP_EOL; //suma
var_dump($a * $b) . PHP_EOL; //mnożenie
var_dump($a / $b) . PHP_EOL; //dzielenie
var_dump($a % $b) . PHP_EOL; //modulo, reszta z dzielenia 10 przez 2 ->0 wynik to zawsze liczba całkowita, zaokraglona w doł!
var_dump($a ** $b) . PHP_EOL; // potęgowanie
echo '-------OPERATORY BITOWE--------'. PHP_EOL;

//OPERATORY BITOWE
$c = 0b0101; //5
$d = 0b0100; //4

var_dump($a) . PHP_EOL; //int ->liczba całkowita
var_dump(decbin($a)) . PHP_EOL; //string ->wartość bitowa
$e=$c & $d; //iloczyn bitowy AND
var_dump($e) . PHP_EOL;
$e=$c | $d; //suma bitowa LUB
$e=$c ^ $d; //alternatywa wykluczająca (1 tam gdzie bity sa rożne)
$e=~ $c; //negacja bitowa

$e=$a << $b; 	//przesunięcie bitowe w lewo, Przesuwa w lewo bity w słowie $a o ilość kroków $b (odpowiednik mnożenia przez 2 $b razy)
$e=$a >> $b; 	//przesunięcie bitowe w prawo (odpowiednik dzielenia przez 2 $b razy)

echo '-------PRZYPISANIA--------'. PHP_EOL;
//OPERATOR PRZYPISANIA
$zmienna = 123;
//ŁĄCZONE OPERATORY PRZYPISANIA
$a += $b;	$a = $a + $b;
$a–= $b; 	$a = $a - $b;
$a *= $b; 	$a = $a * $b;
$a /= $b; 	$a = $a / $b;
$a %= $b; 	$a = $a % $b;
$a **= $b; 	$a = $a ** $b;
$a .= $b; 	$a = $a . $b;
$a &= $b; 	$a = $a & $b;
//bitowe
$a ^= $b; 	$a = $a ^ $b;
$a <<= $b; 	$a = $a << $b;
$a >>= $b; 	$a = $a >> $b;

//OPERATORY PORÓWNANIA
//Zawsze zwaracają wartość typu logicznego (bool)

$a == $b; 	//Równość, Zwraca true jeśli $a jest równe $b po niejawnej konwersji typów (BEZ TYPÓW)
$a === $b; 	//Identyczność 	Zwraca true jeśli $a jest równe $b (porównuje również typy)
var_dump(1=='1'). PHP_EOL; //true
var_dump(1==='1'). PHP_EOL; //false

var_dump(true=='1'). PHP_EOL; //true
var_dump(true==='1'). PHP_EOL; //false odmienne typy bool i string
var_dump(true==1). PHP_EOL; //true
var_dump(true===1). PHP_EOL; //false odmienne typy bool i int
//!!! true ma wartość true, 1 ma wartość true
//false==null
//false==0


$a != $b; 	//Nierówność 	Zwraca true jeśli $a nie jest równe $b po niejawnej konwersji typów (BEZ TYPÓW)
$a <> $b;	//Nierówność 	Zwraca true jeśli $a nie jest równe $b po niejawnej konwersji typów (BEZ TYPÓW)
$a !== $b;	//Nieidentyczność 	Zwraca true jeśli $a nie jest równe $b (porównuje również typy)

var_dump(1!='1'). PHP_EOL; //false
var_dump(1!=='1'). PHP_EOL; //true


$a < $b; 	//Mniejszy 	Zwraca true jeśli $a jest mniejsze od $b
$a > $b; 	//Większy 	Zwraca true jeśli $a jest większe od $b

$a <= $b; 	//Mniejszy równy 	Zwraca true jeśli $a jest mniejsze lub równe $b
$a >= $b; 	//Większy równy 	Zwraca true jeśli $a jest większe lub równe $b
echo '-------OPERATOR KONTROLI BŁĘDÓW--------'. PHP_EOL;

//OPERATOR KONTROLI BŁĘDÓW
//@ dodany na początku wyrażenia wyłącza domyślą obsługę błędów. Blędy nie będą wyświetlane

file_get_contents('niematakiegoplikutrallal.txt'); //zwrocony błąd
echo '--+--+--'. PHP_EOL;
@file_get_contents('niematakiegoplikutrallal.txt'); //nie pokaże błędu

echo '----OPERATORY INKREMENTACJI I DEKREMENTACJI---'. PHP_EOL;

//OPERATORY INKREMENTACJI I DEKREMENTACJI

++$a; 	//Pre-Inkrementacja 	Zwiększa wartość $a o 1, następnie zwraca $a
$a++; 	//Post-Inkrementacja 	Zwraca $a, następnie zwiększa wartość $a o 1
--$a; 	//Pre-Dekrementacja 	Zmniejsza wartość $a o 1, następnie zwraca $a
$a--; 	//Post-Dekrementacja 	Zwraca $a, następnie zmniejsza wartość $a

$a=10;
var_dump($a); //10
var_dump(++$a);//11
var_dump($a); //11
$a=10;
var_dump($a); //10
var_dump($a++); //10
var_dump($a);//11

echo '-------LOGICZNE--------'. PHP_EOL;

//OPERATORY LOGICZNE
//Zawsze zwaracają wartość typu logicznego (bool)

$a && $b; 	//Iloczyn logiczny (AND) 	Zwraca true jeśli $a i $b mają wartość true
var_dump(true && true); //true
var_dump(true && false); //false

$a || $b; 	//Suma logiczna (OR) 	Zwraca true jeśli $a lub $b ma wartość true
var_dump(true || true); //true
var_dump(true || false); //true

!$a; 	//Negacja 	Zwraca true w przypdaku false  //false w przypadku true

$a xor $b; 	//Alternatywa wykluczająca (XOR) 	Zwraca true jeśli $a i $b mają różne wartości
var_dump(true xor true); //false
var_dump(true xor false); //true

//operatory zapisane jako słowa mają najniższy priorytet, pierwsze wykonywane są znakowe

$a and $b; 	//Iloczyn logiczny (AND) 	Zwraca true jeśli $a i $b mają wartość true
$a or $b; 	//Suma logiczna (OR) 	Zwraca true jeśli $a lub $b ma wartość true

echo '-------PRIORYTETY--------'. PHP_EOL;

//PRIORYTETY

//zaczynamy od operatorów o wyższym priorytecie
// jeżeli operatory mają równoważny priorytety wykonujemy je pokoleji

/**
 1.   clone, new
 2.   []
 3.   **
 4.   ++, --, ~, (int), (float), (string), (array), (bool), (object)
 5.   @
 6.   instanceof
 7.   !
 8.   *, /, %
 9.   +, -, .
 10.   <<, >>
 11.   <, <= > >=
 12.   ==, !=, ===, !==, <>, <=>
 13.   &
 14.   ^
 15.   |
 16.   &&
 17.   ||
 18.   =, +=, -=, *=, **=, /=, .=, %=, &=, |=, ^=, <<=, >>=
 19.   and
 20.   xor
 21.   or
*/

var_dump(false && true || true);  // false || false = true
var_dump(false && (true || true)); // true && false = false


//OPERATOR TENARNY(WARUNKOWY)
//zastępuje if else

//$zmienna = (warunek) ? opcja 1 : //=else// opcja 2;
//echo $zmienna
//LUB
//echo (warunek) ? opcja 1 :  opcja 2;

$a=10;
$odpowiedz = ($a>5) ? 'Zmienna jest większa od 5' : 'Zmienna jest mniejsza, bądź równa 5';
echo $odpowiedz . PHP_EOL;
$b=5;
echo $odpowiedz = ($b>=5) ? 'Zmienna jest większa od 5'. PHP_EOL : 'Zmienna jest mniejsza, bądź równa 5' . PHP_EOL;
echo $odpowiedz = ($b>5) ? 'Zmienna jest większa od 5'. PHP_EOL : 'Zmienna jest mniejsza, bądź równa 5' . PHP_EOL;

echo '--+ Zadanie 1 +--'. PHP_EOL;

//zapisz poniższy kod przy użyciu operatora tenarnego
$counter = 1;
while ($counter < 11) {
    if ($counter % 2) {
        echo $counter . ' nie dzieli się przez dwa!' . PHP_EOL;
    } else {
        echo $counter . ' podzielny bez reszty przez dwa!' . PHP_EOL;
    }
    $counter++;
}
echo '--+ rozwiązanie 1 +--'. PHP_EOL;

//$zmienna = (warunek) ? opcja 1 :  opcja 2;

$counter = 1;
while ($counter < 11) {
  $zmienna =   ($counter % 2)  ? $counter . ' nie dzieli się przez dwa!' . PHP_EOL : $counter . ' podzielny bez reszty przez dwa!' . PHP_EOL;
  echo $zmienna;

    $counter++;
}
echo '-------SPACESHIP--------'. PHP_EOL;
//OPERATOR SPACESHIP
//<=>
// operator połączonego porównania
// pozwala na skrócone trójkowe (większy, równy, mniejszy) porównywanie wartości
//zwraca -1, 0, 1

$a = 1;
$b = 2;
echo $a <=> $b; // -1 --->a jest mniejsze od b

$a = 2;
$b = 2;
echo $a <=> $b; // 0 --->a jest równe b

$a = 3;
$b = 2;
echo $a <=> $b; // 1 --->a jest większe od b
echo "\n";
//pozwala porównywać stringi

//var_dump(‘PHP7’ <=> ‘PHP7’); // int(0)

//var_dump(‘PHP7’ <=> ‘PHP6’); // int(1)

var_dump([1,2,3] <=> [3,4,5]); // int(-1)

echo '--+ Zadanie 2 +--'.PHP_EOL;

//Poniższy kod zapisz przy użycia spaceship operator
$a = 2;
$b = 2;

if ($a > $b) {
    echo 1 . PHP_EOL;
} else if ($a == $b) {
    echo 0 . PHP_EOL;
} else {
    echo -1 . PHP_EOL;
}

echo '--+ rozwiązanie 2 +--'. PHP_EOL;

$a = 2;
$b = 2;

echo ($a <=> $b) . PHP_EOL;

echo '-------NULL COALESCING--------'. PHP_EOL;

//OPERATOR NULL COALESCING (TRÓJKOWY ISSET) ??

// pozwala na szybkie sprawdzenie czy wartość istnieje i nie jest równa null
// w przeciwnym przypadku pozwala zwrócić wartość domyślną
//

//zwraca wartość operandu po lewej stronie, jeśli nie jest null
// w przeciwnym razie oblicza argument operacji po prawej stronie i zwraca wynik

//sprawdza lewą
// jeśli nie NULL -> zwraca ją, nie liczy prawej
// jeśli NULL ->liczy prawą i zwraca ją


$foo = 'cos tu jest';  //true
$zm2 = $foo ?? "to jednak był null";
echo "$zm2" . PHP_EOL; //zwróci cos tu jest bo zmienna foo istnieje i jest niepusta (nie null)

echo "--------".PHP_EOL;

$foo = null;  //false
$zm2 = $foo ?? "to jednak był null";
echo "$zm2" . PHP_EOL; //zwróci cos tu jest bo zmienna foo istnieje i jest niepusta (nie null)

echo "--------".PHP_EOL;

$zm2 = $foo2 ?? "nic tu nie ma";  //false
echo "$zm2" . PHP_EOL; //zwróci nic tu nie ma bo zmienna nie istnieje


//Operator ten może być łączony w łańcuchy:

$email = $_POST['email'] ?? $user['email'] ?? 'user@esky.pl';

//TRÓJKOWY EMPTY ?:

echo '----empty----'.PHP_EOL;

$foo = 'cos tu jest';
$zm2 = $foo ?: "to jednak był null";
echo "$zm2" . PHP_EOL;
echo "--------".PHP_EOL;

$foo = null;
$zm2 = $foo ?: "to jednak był null";
echo "$zm2" . PHP_EOL;

echo "--------".PHP_EOL;

$zm2 = $foo2 ?: "nic tu nie ma";
echo "$zm2" . PHP_EOL;



echo '--+ Zadanie 3 +--'.PHP_EOL;

//Poniższy kod zapisz przy użyciu null coalescing

$foo = 'bar';
echo (isset($foo) ? $foo : null) . PHP_EOL;

echo '--+ rozwiązanie 3 +--'. PHP_EOL;

$foo = 'bar';
$zm1 = $foo ?? null;
echo "$zm1" . PHP_EOL;



?>