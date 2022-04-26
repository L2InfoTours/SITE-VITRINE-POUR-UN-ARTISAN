<?php

namespace App\Entity;

use App\Repository\ChantierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChantierRepository::class)
 */
class Chantier
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
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="chantier", cascade={"persist", "remove"})
     */
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity=TypeChantier::class, inversedBy="chantiers")
     */
    private $types;

    // /**
    //  * @ORM\ManyToOne(targetEntity=Admin::class, inversedBy="chantiers")
    //  * @ORM\JoinColumn(nullable=true) //TODO nullable false
    //  */
    // private $admin;


    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->type = new ArrayCollection();
        $this->types = new ArrayCollection();
    }

    public function __toString(){
        return $this->nom;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setChantier($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getChantier() === $this) {
                $image->setChantier(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TypeChantier[]
     */
    public function getType(): Collection
    {
        return $this->type;
    }

    public function addType(TypeChantier $type): self
    {
        if (!$this->type->contains($type)) {
            $this->type[] = $type;
        }

        return $this;
    }

    public function removeType(TypeChantier $type): self
    {
        $this->type->removeElement($type);

        return $this;
    }

    // public function getAdmin(): ?Admin
    // {
    //     return $this->admin;
    // }

    // public function setAdmin(?Admin $admin): self
    // {
    //     $this->admin = $admin;

    //     return $this;
    // }

    /**
     * @return Collection|TypeChantier[]
     */
    public function getTypes(): Collection
    {
        return $this->types;
    }
}
