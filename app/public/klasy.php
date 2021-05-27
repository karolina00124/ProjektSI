<?php

class Ship
{

    public $name;

    public $homeport;
}
?>


<?php

class Ship
{
public string $name;

public string $homeport;

public function setName(string $name): void
{
$this->name = $name;
}

//metody
public function getName(): string
{
return $this->name;
}

public function setHomeport(string $homeport): void
{
$this->homeport = $homeport;
}

public function getHomeport(): string
{
return $this->homeport;
}
}

//tryby dostepu privet i public
