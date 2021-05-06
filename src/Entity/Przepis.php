<?php

namespace App\Entity;

use App\Repository\PrzepisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PrzepisRepository::class)
 */
class Przepis
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $info;

    /**
     * @ORM\Column(type="string", length=65)
     */
    private $nazwa;

    /**
     * @ORM\Column(type="text")
     */
    private $skladniki;

    /**
     * @ORM\Column(type="text")
     */
    private $kroki;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getSkladniki(): ?string
    {
        return $this->skladniki;
    }

    public function setSkladniki(string $skladniki): self
    {
        $this->skladniki = $skladniki;

        return $this;
    }

    public function getKroki(): ?string
    {
        return $this->kroki;
    }

    public function setKroki(string $kroki): self
    {
        $this->kroki = $kroki;

        return $this;
    }
}
