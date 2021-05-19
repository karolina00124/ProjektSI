<?php
/**
 * Kategoria entity.
 */

namespace App\Entity;

use App\Repository\KategoriaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KategoriaRepository::class)
 * @ORM\Table(name="kategorie")
 */
class Kategoria
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
    private $kategoria_nazwa;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKategoriaNazwa(): ?string
    {
        return $this->kategoria_nazwa;
    }

    public function setKategoriaNazwa(string $kategoria_nazwa): self
    {
        $this->kategoria_nazwa = $kategoria_nazwa;

        return $this;
    }
}
