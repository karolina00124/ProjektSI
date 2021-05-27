

<?php
//ustawienie ciasteczka

if(isset($_POST['name']))
{
    //$_COOKIE['name'] = $_POST['name']; // błąd można zapisać zmienna do tablicy ale nie zapamieta sie ona na dłuższy czas, zniknie po odświerzeniu strony

    setcookie('name', $_POST['name'],0, '', '', true); //nazwa po której bedziemy się odwoływali
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
?>

<!DOCTYPE html>
<html>
<br>
<br>
<form method="post" action="plik.php"> <!--metoda i skrypt do ktorego bedziemy wysyłać-->
    <div>
        <label for="name">OPIS pola formularza: Nazwa</label>
        <input type="text" id="name" name="name"> <!--name = " " = nazwa pola w tablicy $_GET-->
    </div>
    <div>
        <input type="submit" name="send" value="send">
    </div>
</form>
</html>