<?php
//Konstruktor w dziedziczeniu
//konstruktor DOMYŚLNY (bez argumentów) klasy rodzica wywołuje sie przy tworzeniu obiektu z klasy dziecka
//konstruktor z argumentami klasy rodzica powoduje bład w klasie dziecka (bo brakuje tych argumentów)
//konstruktor w klasie dziecka nadpisze konstruktor rodzica

//aby w konstruktorze dziecka odwołać się do konstruktora rodzica ->  parent::__construct($name);
//=> wywołują sie oba konstruktory

//parent:: -> odnosi sie do klasy rodzica możemy wywoływać zmienne funkcje i konstruktory
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dziedziczenie - programoanie obiektowe lekcja 22</title>
</head>
<body>
<style>
    table { border: 2px solid black;}
</style>
<h2>Programowanie obiektowe - konstruktory i destruktory</h2>

<table>
    <tr>
        <td>
            <?php

            class Animal
            {
                public $name;
                public $age ;
                public $song;

                public function sing($song)
                {
                  $this ->song = $song;
                  echo $song . "<br>";
                }

                public function sayHi()
                {
                    echo "Hi!<br>";
                }

                public function __construct($name)
                {
                    echo "Zwierzątko zostało utworzone przez konstruktor klasy Animal <br>";
                    $this->name= $name;
                }
            }


            class Cat extends Animal //cat dziedziczy po animal czyli ma dostep do zmiennych i funkcji
            {

                public function __construct($name)
                {
                    echo "Kot został utworzony przez konstruktor klasy Kot <br>";
                    parent::__construct($name); //oddajemy pracę rodzicowi
                    parent::sing("miałmiałmiamiałmiaaaaaał"); // parent:: -> odwołujemy sie do klasy rodzica

                }
            }

            //nowy obiekt
            $cat = new Cat('Mruczek'); // wywołujemy oba konstruktory rodzica i dziecka przez ::parent
            echo $cat->name. '<br>';
            $cat->sayHi();
            echo '<br>';

            //konstruktor DOMYŚLNY (bez argumentów) klasy rodzica wywołuje sie przy tworzeniu obiektu z klasy dziecka
            //konstruktor z argumentami klasy rodzica powoduje bład w klasie dziecka (bo brakuje tych argumentów)
            //konstruktor w klasie dziecka nadpisze konstruktor rodzica

            echo "-------<br><br>";
            $animal = new Animal('Burek'); // wywołujemy konstruktor rodzica
            echo $animal->name. '<br>';
            ?>
        </td>
    </tr>
</table>
</body>
</html>

