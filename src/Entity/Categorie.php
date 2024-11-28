<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    private ?string $label = null;

    /**
     * @var Collection<int, Media>
     */
    #[ORM\ManyToMany(targetEntity: Media::class, inversedBy: 'categories')]
    private Collection $Ãmedias;

    public function __construct()
    {
        $this->Ãmedias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection<int, Media>
     */
    public function getÃmedias(): Collection
    {
        return $this->Ãmedias;
    }

    public function addMedia(Media $media): static
    {
        if (!$this->Ãmedias->contains($media)) {
            $this->Ãmedias->add($media);
        }

        return $this;
    }

    public function removeMedia(Media $media): static
    {
        $this->Ãmedias->removeElement($media);

        return $this;
    }
}
