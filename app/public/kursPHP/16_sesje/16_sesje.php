<?php
session_start(); //rozpoczęcie sesji -> pierwsza instrukcja w kodzie php
//skonfigurowany automatycznie w docker

if(isset($_POST['login']) && isset($_POST['pass'])) //tworzymy SESJE = zmienną w tablicy SESSION
{
    $_SESSION['user'] =$_POST['login'];  //globalna tablica asjocjacyjna - podajemy klucz - pod którym chcemy przechowywać sesje użytkownika
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SESJE lekcja 16</title>
</head>
<body>
<h2>SESJE</h2>

<?php
if(!isset($_SESSION['user']))
{
?>
<table>
    <tr>
        <td>
        <p>Zaloguj</p>
        <form action ="16_sesje.php" method="post">

           <p>Login: <input type="text" name="login" id=""></p>
            <p>Hasło: <input type="text" name="pass" id=""></p>

            <input type="submit" value="Zaloguj">
        </form>
        </td>
    </tr>
</table>

<?php
}
?>
<br><br>


<table>
    <tr>
        <td>

        </td>
    </tr>
</table>

<?php

    if( isset($_SESSION['user'])) //sprawdzamy czy sesja istnieje = czy uzytkownik jest zalogowany bo $_SESSION['user'] =$_POST[login]
    {
        echo '<b>Zalogowano</b><br><br>';
        echo 'LOGIN: ';
        echo $_SESSION['user'];
        echo '<br><br><a href="wyloguj.php">Wyloguj<a/> ';
    }
    else
    {
        echo '<b>Użytkownik niezalogowany</b>';
    }


?>
</body>
</html>