<?php
/**
 * Tag Zmienny entity.
 */

namespace App\Entity;

use App\Repository\TagZmiennyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagZmiennyRepository::class)
 * @ORM\Table(name="tagi_zmienne")
 */
class TagZmienny
{
    /**
     * Id.
     *
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Nazwa.
     *
     * @var string
     *
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
