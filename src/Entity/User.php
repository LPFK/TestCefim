<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $Prenom;

    #[ORM\Column(type: 'integer')]
    private $Age;

    #[ORM\Column(type: 'string', length: 255)]
    private $Sexe;

    #[ORM\Column(type: 'string', length: 255)]
    private $Promo;

    #[ORM\Column(type: 'text')]
    private $Competence;

    #[ORM\Column(type: 'boolean')]
    private $isGroup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->Sexe;
    }

    public function setSexe(string $Sexe): self
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function getPromo(): ?string
    {
        return $this->Promo;
    }

    public function setPromo(string $Promo): self
    {
        $this->Promo = $Promo;

        return $this;
    }

    public function getCompetence(): ?string
    {
        return $this->Competence;
    }

    public function setCompetence(string $Competence): self
    {
        $this->Competence = $Competence;

        return $this;
    }

    public function isIsGroup(): ?bool
    {
        return $this->isGroup;
    }

    public function setIsGroup(bool $isGroup): self
    {
        $this->isGroup = $isGroup;

        return $this;
    }
}
