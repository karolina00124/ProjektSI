<?php

namespace App\Entity;

use App\Repository\UlubioneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UlubioneRepository::class)
 */
class Ulubione
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ocena;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOcena(): ?int
    {
        return $this->ocena;
    }

    public function setOcena(?int $ocena): self
    {
        $this->ocena = $ocena;

        return $this;
    }
}
