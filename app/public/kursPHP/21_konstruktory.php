<?php
//konstruktor - w klasie, konstruuje klase __construct() ->  metoda magiczna, wywołuje się jako pierwszy w momencie utworzenia obiektu = new
//destruktor  - w klasie, __destruct() ->  metoda magiczna wywołuje się jako ostatni w momencie utworzenia obiektu = new= w momencie usuwania obiektu z pamięci
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SESJE lekcja 21</title>
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
                class Person
                {
                    public $name;
                    public $age;

                    //KONSTRUKTOR
                    //aby funkcja stała się konstruktorem musi mieć nazwę __construct()

                    public function __construct($name,$age = 0) //argumenty konstruktora zapobiegają tworzeniu pustych obiektów
                    {                                 //przypisana wartość domyślna
                      //przypisujemy wartość zmiennej z kalsy do argumentu konstruktora
                        $this->name =$name; // this odnosi się do całej klasy = $name -> najblizsze wystąpienie name = wewnatrz konstruktora
                        $this->age=$age;
                    }

                   public function info()
                    {
                        echo $this->name . ", lat: ". $this->age . "<br>";
                   }

                //DESTRUKTOR
                //aby funkcja stała się destruktorem musi mieć nazwę __destruct()
                //domyślnie wywołuje się na samym końcu kodu!!!
                   public function __destruct()
                {
                    echo"usunięto " . $this->name . '<br>';
                }

                 }

                 $p1 = new Person("Adam",22); // konstruktor domyślnie wykonuje swoje ciało jako pierwszy = w momencie wywołania obiektu
                $p1->info();

                $p2 = new Person("Jaś") ;
                $p2->info();
                //-> ustawić wartość domyślną w argumencie konstruktora age = 0

                $p3= new Person("Alicja", "45");
                $p3->info();
              //!!! $p4 = new Person(); //!!! bład brakuje argumenów
              //$p4->info();

            //funkcja wywołująca destruktor
            unset($p2); //usunie się dokładnie w tym miejscu kodu
            ?>
        </td>
    </tr>
</table>
</body>
</html>