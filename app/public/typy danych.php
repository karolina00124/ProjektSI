<?php
//bool - true 1, false 0
$zmienna1 = true;
echo "$zmienna1" . PHP_EOL;
//wyświetli 1

$zmienna2= false;
echo "$zmienna2";
//nie wyswietli nic

//funkcja var_dump pokazuje co znajduje sie w zmiennej

var_dump($zmienna1);
//wyswietli true
var_dump($zmienna2);
//wyswietli false


//wyniki rzutowania innych typów na typ logiczny bool

var_dump((bool)false);
var_dump((bool)'false');
var_dump((bool)0);
var_dump((bool)0.0);
var_dump((bool)'');
var_dump((bool)'0');
var_dump((bool)[]);
var_dump((bool)null);
var_dump((bool)22);
var_dump((bool)-1);
var_dump((bool)'foo');
var_dump((bool)2.3e5);
var_dump((bool)['1', '2']). PHP_EOL;
?>
<?php
//integer - liczby całkowite
$a = 123; //podajemy bez cudzyslowow
var_dump($a). PHP_EOL;

$b = '123'; //zapisane jako string
var_dump($b);
//!!! wymuszenie wyświetlenia jako int
var_dump((int)$b);
//rozmiar

echo PHP_INT_SIZE; //8
echo PHP_EOL;
echo PHP_INT_MAX; //9223372036854775807
echo PHP_EOL;
echo PHP_INT_MIN; //-9223372036854775808
echo PHP_EOL;
$maxInt = PHP_INT_MAX;
var_dump($maxInt + 1);
?>

<?php
//Float, Double, Real numbers - liczby rzeczywiste

$z1 = 1.234; var_dump($z1). PHP_EOL;
$z2 = 1.2e3; var_dump($z2). PHP_EOL;
$z3 = 7E-10; var_dump($z3). PHP_EOL;
?>

<?php
//String - ciągi znaków
var_dump('foo');
var_dump("bary");
$za = "tralala";
var_dump($za). PHP_EOL;
?>

<?php
//NULL - brak wartości

$zm = NULL;
if (is_null($zm)) {
    echo 'bar';
}
?>

<?php
echo 'Ahoj' . PHP_EOL . 'przygodo!';
?>