<?php

namespace App\Entity;

use App\Repository\TypeChantierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeChantierRepository::class)
 */
class TypeChantier
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
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity=Chantier::class, mappedBy="types")
     */
    private $chantiers;

    public function __construct()
    {
        $this->chantiers = new ArrayCollection();
    }

    public function __toString(){
        return $this->type;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|Chantier[]
     */
    public function getChantiers(): Collection
    {
        return $this->chantiers;
    }

    public function addChantier(Chantier $chantier): self
    {
        if (!$this->chantiers->contains($chantier)) {
            $this->chantiers[] = $chantier;
            $chantier->addType($this);
        }

        return $this;
    }

    public function removeChantier(Chantier $chantier): self
    {
        if ($this->chantiers->removeElement($chantier)) {
            $chantier->removeType($this);
        }

        return $this;
    }

    public function getChantier(): ?Chantier
    {
        return $this->chantier;
    }

    public function setChantier(?Chantier $chantier): self
    {
        $this->chantier = $chantier;

        return $this;
    }
}
