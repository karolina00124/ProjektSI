<?php
//Relacja między obiektami:
//JEST - dziedziczenie w klasach i interfejsach
//MA - składa się z ...


//+ASOCJACJA+
//dwa obiekty istnieją niezależnie od siebie -  Istnienie jednego nie jest warunkiem istnienia drugiego. Usunięcie związku pomiędzy obiektami nie wpływa na sposób ich funkcjonowania.
//np. relacja:

//++AGREGACJA++
// obiekt składa się z innych obiektów - NIE obligatoryjnie - obiekty mogą istnieć niezależnie
//np. relacja: samochód - ma silnik, skrzynie biegów, kierownice

//+++KOMPOZYCJA+++
// obiekt składa się z innych obiektów
//np. relacja: ciało- ma organy (wątroba, mózg, serce)


?>

<?php
//AGREGACJA

require_once __DIR__ . '/Engine.php';
require_once __DIR__ . '/SteeringWheel.php';
require_once __DIR__ . '/Gearbox.php';

class Car
{
    protected $engine = null;

    protected $steeringWheel = null;

    protected $gearbox = null;

    public function __construct(Engine $engine, SteeringWheel $steeringWheel, Gearbox $gearbox)
    {
        $this->engine = $engine;
        $this->steeringWheel = $steeringWheel;
        $this->gearbox = $gearbox;
    }

    // ...
}
