<?php
//obiekty - konkretna instancja np. krzesło
//klasy - kategoria np. meble, przepis jak dany obiekt wytworzyć
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SESJE lekcja 20</title>
</head>
<body>
<style>
    table { border: 2px solid black;}
</style>
<h2>Programowanie obiektowe - klasy i obiekty</h2>

<table>
    <tr>
        <td>
            <?php
            //KLASA
            class Person //klasy nazywamy z dużej litery konwencja
            {  //ciało klasy

                //WŁAŚCIWOŚCI klasy = zmienne należące do klasy
                public $name; //dyrektywa dostępności można do zmiennej odwołać się z poza kodu
                public $age;

                //METODY klasy = funkcje należące do klasy
                public function info()
                {
                    echo $this->name . ", lat:" . $this->age."<br>";//$this-> //odwołanie do zmiennej znajdującej sie w obecnej klasie = tej samej co funkcja
                }

            }
            //nowy obiekt => konstruktor jest domyślny (nie stworzyliśmy innego) czyli to nazwaklasy()

            $p1 = new Person();  //przypisanie klasy do biektu //new nazwa klasy na bazie której tworzymy obiekt

            //wywołanie właściwości
            $p1->name = "Adam"; //przy wywołaniu właściowści nie dajemy znaku dolara $
            $p1->age = "22";
            echo $p1->name;
            echo '<br>';
            echo $p1->age;
            echo '<br>';
            echo '-------------';
            echo '<br>';

            //wywołanie funkcji
            $p1->info();

            //klas używamy w przypadku wielu obiektów
            $p2 = new Person();
            $p2->name = "Bartek";
            $p2->age = "35";

            $p3 = new Person();
            $p3->name = "Ala";
            $p3->age = "6";

            $p4 = new Person();
            $p4->name = "Jan";
            $p4->age = "58";

            $p2->info();
            $p3->info();
            $p4->info();
            ?>
</td>
</tr>
</table>
</body>
</html>