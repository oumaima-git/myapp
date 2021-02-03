<?php

namespace App\Entity;

use App\Repository\CabinettRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CabinettRepository::class)
 */
class Cabinett
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cin;

   

    /**
     * @ORM\Column(type="string", length=255)
     */
     private $NumDeFichePatient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumDeTelephone;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNumDeFichePatient(): ?string
    {
        return $this->NumDeFichePatient;
    }

    public function setNumDeFichePatient(string $NumDeFichePatient): self
    {
        $this->NumDeFichePatient = $NumDeFichePatient;

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

    public function getNumDeTelephone(): ?string
    {
        return $this->NumDeTelephone;
    }

    public function setNumDeTelephone(string $NumDeTelephone): self
    {
        $this->NumDeTelephone = $NumDeTelephone;

        return $this;
    }
}
