<?php

namespace App\Entity;

use App\Repository\AlbumsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\MaxDepth;

#[ORM\Entity(repositoryClass: AlbumsRepository::class)]
class Albums
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $pochette;

    #[ORM\Column(type: 'string', length: 255)]
    private $spotify;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\ManyToMany(targetEntity: Artistes::class, inversedBy: 'albums')]
    #[MaxDepth(1)]
    private $artistes;

    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'albums')]
    #[MaxDepth(1)]
    private $categories;

    public function __construct()
    {
        $this->artistes = new ArrayCollection();
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPochette(): ?string
    {
        return $this->pochette;
    }

    public function setPochette(string $pochette): self
    {
        $this->pochette = $pochette;

        return $this;
    }

    public function getSpotify(): ?string
    {
        return $this->spotify;
    }

    public function setSpotify(string $spotify): self
    {
        $this->spotify = $spotify;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection<int, Artistes>
     */
    #[MaxDepth(1)]
    public function getArtistes(): Collection
    {
        return $this->artistes;
    }

    public function addArtiste(Artistes $artiste): self
    {
        if (!$this->artistes->contains($artiste)) {
            $this->artistes[] = $artiste;
            $artiste->addAlbum($this);
        }

        return $this;
    }

    public function removeArtiste(Artistes $artiste): self
    {
        if ($this->artistes->removeElement($artiste)) {
            $artiste->removeAlbum($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    #[MaxDepth(1)]
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }
}
