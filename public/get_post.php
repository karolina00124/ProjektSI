<?php
//GET

//metoda get - stosuje się dla pojedynczych danych
// są one widoczne w pasku adresu przeglądarki - nie to metoda bezpieczna, jeżeli nie chcemy, aby postronne osoby znały wartość naszych danych
//Metody tej nie można stosować do wysłania danych do domyślnego programu pocztowego

//$_GET
//tablica asocjacyjna

echo "-------GET--------" . PHP_EOL;
echo 'Hello ' . $_GET['name'] . ' !' . PHP_EOL;

//wywołanie w przeglądarce
//http://localhost:8000/get_post_cookie.php  ---> niezdefiniowana zmienna
//http://localhost:8000/get_post_cookie.php?name=Karola   ---> wyświetli Hello Karola

echo "-----------" . PHP_EOL;

$_GET['name2'] = 'KAROLA'; //zdefiniowanie zmiennej w tablicy $_GET

$name = !empty($_GET['name2']) ? $_GET['name2'] : 'World'; //operator tenarny ---> wyświetli Hello KAROLA
//jesli zmienna name2 w tablicy SGET jest niepusta wyświetl ją, jeśli jest pusta wyświetl World

echo 'Hello ' . $name . ' !' . PHP_EOL;

echo "<br><br>";
echo "---Formularz GET----" . PHP_EOL;

?>

<!--Formularz GET-->
<!--Przesyła dane z imputów o danym name, do zmiennej w tablicy $_GET o tej samej nazwie (index)-->

<!DOCTYPE html>
<html>
<br>
<br>
     <form method="get" action="get_post.php"> <!--metoda i skrypt do ktorego bedziemy wysyłać-->
          <div>
              <label for="login">OPIS pola formularza: Login</label>
              <input type="text" id="login" name="login"> <!--name = " " = nazwa pola w tablicy $_GET-->
          </div>
          <div>
              <input type="submit" name="send" value="send">
          </div>
      </form>
</html>

<?php

$zmienna = !empty($_GET['login']) ? $_GET['login'] : 'NIE podano loginu';

echo $zmienna . ' !'. PHP_EOL;

//var_dump($_GET); //sprawdzenie co znajduje się w $_GET
echo "<br><br>";
echo "-------POST-------". PHP_EOL;
echo "<br><br>";
//POST

//post - możemy przesyłać dowolną liczbę danych w sposób ukryty dla użytkownika

//$_POST
//tablica asocjacyjna

$_POST['namepost'] = 'Karolina'; //zdefiniowanie zmiennej w tablicy $_POST

$name = !empty($_POST['namepost']) ? $_POST['namepost'] : 'World'; //operator tenarny ---> wyświetli Hello Karolina

echo 'Hello ' . $name . ' !' . PHP_EOL;

echo "<br><br>";
echo "-------Formularz POST--------" . PHP_EOL;

?>

<!--Formularz POST-->
<!--Przesyła dane z imputów o danym name, do zmiennej w tablicy $_POST o tej samej nazwie (index)-->

<!DOCTYPE html>
<html>
<br>
<br>
<form method="post" action="get_post.php"> <!--metoda i skrypt do ktorego bedziemy wysyłać-->
    <div>
        <label for="haslo">OPIS pola formularza: Haslo</label>
        <input type="text" id="haslo" name="haslo"> <!--name = " " = nazwa pola w tablicy $_POST-->
    </div>
    <div>
        <input type="submit" name="send" value="send">
    </div>
</form>
</html>

<?php

$zmienna2 = !empty($_POST['haslo']) ? $_POST['haslo'] : 'NIE podano hasla';

echo $zmienna2 . ' !'. PHP_EOL;

//var_dump($_POST); //sprawdzenie co znajduje się w $_GET
echo "<br><br>";

echo "-------COOKIES--------" . PHP_EOL;

//niewielkie porcje danych
//przechowuje informacje na dłuższy okres
//dane sładują po stronie użytkownika - ma on do nich dostęp i może je modyfikować
?>

<!--Formularz do COOKIE mrtoda POST-->

<!DOCTYPE html>
<html>
<br>
<br>
     <form method="post" action="get_post.php"> <!--metoda i skrypt do ktorego bedziemy wysyłać-->
          <div>
              <label for="name">OPIS pola formularza: Nazwa</label>
              <input type="text" id="name" name="name"> <!--name = " " = nazwa pola w tablicy $_GET-->
          </div>
          <div>
              <input type="submit" name="send" value="send">
          </div>
      </form>
</html>

<?php
//ustawienie ciasteczka

    if(isset($_POST['name']))
    {
        //$_COOKIE['name'] = $_POST['name']; // błąd można zapisać zmienna do tablicy ale nie zapamieta sie ona na dłuższy czas, zniknie po odświerzeniu strony

        setcookie('name', $_POST['name']); //nazwa po której bedziemy się odwoływali
                                          //wartość przypisana do cisteczka
                                         //czas istnienia ciasteczek w sekundach dodany do daty "początku świata" xD, domyślna wartość z sesji
        //echo time() //czas od 01.01.1970 = początek świata w sekundach do aktualnego momentu
    }


//wypisywanie ciasteczka

if(isset($_COOKIE['name']))
{
    echo 'IMIE:' .PHP_EOL;
    echo "<br>";
    echo $_COOKIE['name'] . PHP_EOL; //wyswietlanie ciasteczka
    echo "<br>";
    echo '<a href="delete.php">usun</a>';
    echo "<br>";
}
else{
    echo 'Brak ciasteczek'.PHP_EOL;
    echo "<br>";
}
//uwaga! ciasteczko się pojawi dopieru po odświezeniu strony

?>
<?php
session_start();
echo 'Hello World!';
echo '\n';
echo "\n";
$counter = 1;
echo 'Counter: $counter';
echo "\n";
echo "Counter: $counter";
echo "\n";
echo 'Counter: ' . $counter . "\n";
// tworzy sie ciasteczko, ktore zapamietuje dane
?>

<p>
    <?php echo date('d.m.Y'); ?>
</p>

<?php
echo 'hello' . isset($_GET['name']);
var_dump($_GET);
echo 'hello' . ($_GET['name'] ?? 'World'); // ??operator
?>
