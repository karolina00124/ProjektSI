<?php
//static (po modyfikatorze dostępności)
//Dostęp do statycznej właściwości/metody uzyskujemy poprzez :: (dwa znaki dwukropka)

//statyczne elementy klasy - nie potrzebują obiektu do działania
// Mamy zarówno pola jak i metody statyczne.

class Counter
{
    public static $counter = 0;

    public static function resetCounter()
    {
        static::$counter = 0;
    }

    public static function setCounter()
    {
        static::$counter++;
    }

    public static function getCounter()
    {
        return static::$counter;
    }
}//!! nie działa $this-> ; W celu odwołania się do tej samej klasy należy skorzystać z self::

echo Counter::getCounter() . PHP_EOL; //ostęp do statycznej metody -> ::

Counter::setCounter();
Counter::setCounter();
Counter::setCounter();

echo Counter::getCounter() . PHP_EOL;