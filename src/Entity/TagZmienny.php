<?php

namespace App\Entity;

use App\Repository\TagZmiennyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagZmiennyRepository::class)
 */
class TagZmienny
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tag_zmienny_nazwa;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTagZmiennyNazwa(): ?string
    {
        return $this->tag_zmienny_nazwa;
    }

    public function setTagZmiennyNazwa(string $tag_zmienny_nazwa): self
    {
        $this->tag_zmienny_nazwa = $tag_zmienny_nazwa;

        return $this;
    }
}
