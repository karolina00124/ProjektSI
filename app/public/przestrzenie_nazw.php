<?php
//Przstrzeń nazw - kontekst, w którym działają klasy/obiekty
//kapsułkowanie elementów => tworzenie wydzielonych, nazwanych przestrzeni
//poza przestrzenią elementy nie istnieją, wewnatrz przestrzeni elementy nie mogą powielać nazw (funkcje, klasy, stałe)
//(zmiennych nie można kapsułkować)


//Rodzaje
//Unqualified name
//- przestrzeń nazw bez separatora, np. Animal,
//Qualified name
//- przestrzeń nazw z separatorem, np. Animal\Mammal,
//Fully qualified name
//- przestrzeń nazw rozpocznająca się od separatora, np. \Animal\Mammal.


//domyślnie obiekty znajdują się w przestrzeni globalnej -> \ (oznaczenie)

//tworzenie swojej przestrzeni nazw - > namespace

//Animals/Animal.php
namespace Animals; //kapsułka w przestrzeni nazw

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = (string)$name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
