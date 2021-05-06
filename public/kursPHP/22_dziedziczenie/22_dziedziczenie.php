<?php
//Dziedziczenie - klasa pochodna dziedziczy od klasy rodzica = zawiera w sobie wszystkie właściwości z klasy rodzica zgodnie z trybami dostępu
//extends =rozszerz
//Dziedziczenie to relacja typu JEST. Obiekt klasy Cat jest obiektem klasy Animal
//możliwe jest dziedziczenie tylko po jednej klasie!!!


//Derektywy dostępności
//public - dostepne z innych miejsc np. do zmiennej $name czy $age z Animal odnosimy sie z klasy Cat

//private - dostępty tylko w danej klasie np. z dziecka Cat nie możemy sie odnieśc do zmiennej $song, która jest tylko w Animal
//z obiektów tej klasy nie możemy się odnieść do zmiennej!!! tylko w obrębie klasy {}

//protected - dostępny w klasie rodzica i dziecka
//z obiektów tej klasy również nie możemy się odnieść do zmiennej!!! tylko w obrębie klasy rodzica i dziecka {}

// zmienne muszą mieć określona dostępnośc -> w przeciwnym wypadku Fatal error
//funkcje nie muszą mieć określonej dostępności -> domyślnie są public

//HERMETYZACJA - polega na ukrywaniu części składowych tak, aby nie były one dostępne z zewnątrz
//->INTERFEJS = klasy/obiektu wszystkie pola i metody public
//->IMPLEMENTACJA = wszystkie pola i metody privet i protected
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
                public $age = 5;
                private $song = 'taralalala';
                protected $leg = 4;

                public function sayHi()
                {
                    echo "Hi!<br>";
                }

            }

            class Cat extends Animal //cat dziedziczy po animal czyli ma dostep do zmiennych i funkcji
            {
              public function getAge()
              {
                  return $this->age; //this szuka w najszerszym kontekście => też age u rodzica
              }
            }

            //nowy obiekt - rodzic
            $anm1= new Animal();
            echo "Zwierzątko mówi:" . $anm1 ->sayHi() . '<br>'; //??  dlaczego wyświetla na odwrót ?? najpierw funkcja pożniej string


            //nowy obiekt dziecko
            $cat = new Cat();
            echo $cat->name='Mruczek' . '<br>';

            //odwołujemy sie do funkcji odziedziczonej od rodzica
            $cat->sayHi();

            //odwołujemy się do funkcji w klasie pochodnej
            echo $cat->getAge() . '<br>';//konieczne echo bo funkcja return

            //derektywy dostępności
            echo '----derektywy dostępności---<br>';
           echo $cat->age. '<br>'; //age public mamy do niego dostęp z innej klasy
           echo $cat->song . '<br>'; //BŁĄD song jest private -  obiekt cat uważa zmienną za niezdefiniowana
            
           echo $anm1->age;
           echo $anm1->song; //Błąd zmienna dostępna w obrębie klasy nie obiektów!!!

           //echo $anm1->leg; //błąd zmienna dostepna w obrębie klasy rodzica i dziecka nie obiektów
            ?>
        </td>
    </tr>
</table>
</body>
</html>
