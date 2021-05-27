<?php
//klasa abstrakcyjna
//interfejsy -> dzięki nim dziecko może dziedziczyć od kilku przodków => implementować kilka interfaców,
//interejs klasy jest reprezentowany przez związek typu JEST
//Technicznie, interfejs to taka klasa, która zawiera metody publiczne ale bez ich implementacji.
//klasy- dziecko może dziedziczyć tylko od jednej klasy => możliwa jest przechodniość => B dziedziczy po A, C dziedziczy po B => C dziedziczy bezpośrdnio po B i pośrednio po A
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

           abstract class Animal //klasa abstrakcyjna -> nie można utworzyć obiektu tej klasy //wszystkie musza być public!!!
            {
                public $name ='Milka';

               public function standardVoice()
               {
                   return "Gryyy!<br>";
               }

                //funkcja ABSTRAKCYJNA -> nie może posiadac ciała funkcji
                abstract public function getVoice();
            }


            //INTERFACE
            interface EatInterface //wszystkie musza być public!!!
            {
                public function eat($food); //interface -> nie może posiadac ciała funkcji
            }
            interface BInterface
            {

            }

            class Cat extends Animal implements EatInterface, BInterface // aby dziedziczyć po klasi eabstrakcyjnej klasa dziecko musi zawierać w sobie wszystkie implementacje abstrac z rodzica
            {                                                   //zaimplementować wszystkie metody interfacu
                public function getVoice()
                {
                    // TODO: Implement getVoice() method.
                    return "MEOOOOW!<br>";
                }

                public function eat($food)
                {
                    // TODO: Implement eat() method.
                    return "Omnomnomnomnom ".$food."<br>";
                }

            }
            $cat = new Cat();
           echo $cat->name;
           echo "<br>";

           echo $cat->getVoice();
           // echo $animal->getVoice(); // błąd klasa abstrakcyjna nie może mieć obiktów

           echo $cat->standardVoice(); // można się odwołać bo metoda nie jest abstract mimo że klasa jest abstrakcyjna


            echo $cat->eat("placki");
            ?>
        </td>
    </tr>
</table>
</body>
</html>

