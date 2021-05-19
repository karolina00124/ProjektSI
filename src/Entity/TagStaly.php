<?php
/**
 * Tag Stały entity.
 */

namespace App\Entity;

use App\Repository\TagStalyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagStalyRepository::class)
 * @ORM\Table(name="tagi_stale")
 */
class TagStaly
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
    private $tag_staly_nazwa;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTagStalyNazwa(): ?string
    {
        return $this->tag_staly_nazwa;
    }

    public function setTagStalyNazwa(string $tag_staly_nazwa): self
    {
        $this->tag_staly_nazwa = $tag_staly_nazwa;

        return $this;
    }
}
