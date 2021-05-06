<?php declare(strict_types=1); //zadeklarowanie typu, musi wystapic na poczatku skryptu

echo '-------FUNKCJE WBUDOWANE--------'. PHP_EOL;
//funkcja ISSET
$x = 1;
$y = 2;
if (isset($x)){  //isset - istnieje i nie null
    echo "$x";
} else{
    echo "$y";
}

echo PHP_EOL;

//funkcja EMPTY


echo '-------FUNKCJE--------'. PHP_EOL;
//FUNKCJE
//funkcja powinna robić jedną rzecz, być odrębną całością => enkapsulacja, parcelacja problemu

// function nazwa() - bezparametrowa

function hello() //najprostrza, nic nie zwraca
{  //ciało funkcji

    echo 'HELLO WORLD!' . PHP_EOL;

}
//wywołanie funkcji

hello();
echo '----z parametrem----'. PHP_EOL;

// function nazwa(parametr) parametr - nowa zmienna, ktora bedzie przechowywala wartosci z funkcji

function add($a)
{
    echo ++$a . PHP_EOL; //+1 do zmiennej parametru funkcji
}

//wywołanie funkcji

add(5);

echo '----domyślna-----'. PHP_EOL;

//!!! przypisanie wartości domyślnej -> jeśli użytkownik nie poda argumentu funkcja przyjmie tę wartość
// parametry domyślne powinny znajdować się na końcu ($a, $b, $c, $d=5)
function add2($a, $b = 5) //wartość domyślna
{
    echo $b + $a . PHP_EOL;
}
//wywołanie funkcji z 2 argumentami
add2(5, 10); //15

//wywołanie funkcji z 1 argumentem, drugi przyjmie wartość domyślną
add2(5); //10 bo b domyślnie to 5

echo '-----return-----'. PHP_EOL;

//FUNKCJA KTÓRA COŚ ZWRACA - RETURN
//przyjmuje parametry i zwraca wynik jako jedną zmienna

function mul($a, $b)
{
    $res= $a * $b;
    return $res;  //zakańcza działanie funkcji i zwraca wartość jako wynik działania funkcji
}

//wywołanie funkcji

$wynik= mul(3,4);
echo $wynik . PHP_EOL;

echo '---deklaracja typów danych---'. PHP_EOL;

//FUNKCJA Z ZADEKLAROWANYMI TYPAMI DANYCH
// function nazwa(typ_parametru parametr) : typ zwracanej zmiennej

function pozdrowienie($name) //nazwy funkcji nie zaczyna sie od cyfr
{
    echo 'Hello ' . $name . PHP_EOL;
}


pozdrowienie('Karolina'); //wypisze
pozdrowienie('123'); //wypisze


echo '---błąd---'. PHP_EOL;

function pozdrowienie2(string $name) : void//określenie typu zmiennej i co zwraca //void nic nie zwraca
{
    echo 'Hello' . $name . PHP_EOL;
}
//pozdrowienie2(123); //BŁĄD nie wypisze bo zadeklarowany jest string

echo '----rekurencja-----'. PHP_EOL;

// rekurencja = rekursja - wywolywanie samej siebie

function recursion($number)
{
    if ($number < 20) {
        echo $number . PHP_EOL;
        recursion($number + 1);
    }
}

recursion(8);// wypisze 8 9 10 11 ... 20
recursion('bar'); //warning
?>

<?php
//komentarz PHPDOC - DOKUMENTACJA KODU

/**   -----> komwntarz w formacie PHPdoc, uzywany do tworzenia dokumentacji
 * Recursion demo.
 *
 * @param integer $number Number //typ, zmienna i opis parametru przekazywanego do funkcji
 * @param string $name ...
 *                   ---> komentarze grupujemy i odzielamy pusta linia
 * @return int ...
 */

function recursion2(int $number): void
{
    if ($number < 20) {
        echo $number . PHP_EOL;
        recursion2($number + 1);
    }
}

//recursion2('bar'); //fatal error - zadeklarowany typ zmiennej
?>
<?php
echo "-----zadanie1------";
