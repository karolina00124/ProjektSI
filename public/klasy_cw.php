
<?php
class Cake
{
   public $nazwa;
   public $krem;
   public $biszkopt;

  public function makacake()
  {
     echo $this->nazwa . "<br><br> krem: " . $this->krem ." + biszkopt: ".$this->biszkopt ;
     echo "<br>-----------";
  }
}

$tort1 = new Cake();
$tort1-> nazwa = 'CZEKOLADOWY';
$tort1 ->biszkopt = 'jasny';
$tort1 ->krem = 'czekoladowy';

$tort2 = new Cake();
$tort2->nazwa = 'CZARNY LAS';
$tort2->biszkopt = 'ciemny';
$tort2->krem = 'czekoladowy';
$tort2->krem = 'wiśniowy'; // nadpisanie zmiennej!!

echo $tort1 ->makacake();
echo $tort2 ->makacake();

