<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HTTroublesDys;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HTAutisme;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HTMaladiesDegeneratives;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HTPsychique;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HTAuditif;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HTVisuel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $HTMental;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sexe;

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

    public function getHTTroublesDys(): ?bool
    {
        return $this->HTTroublesDys;
    }

    public function setHTTroublesDys(bool $HTTroublesDys): self
    {
        $this->HTTroublesDys = $HTTroublesDys;

        return $this;
    }

    public function getHTAutisme(): ?bool
    {
        return $this->HTAutisme;
    }

    public function setHTAutisme(bool $HTAutisme): self
    {
        $this->HTAutisme = $HTAutisme;

        return $this;
    }

    public function getHTMaladiesDegeneratives(): ?bool
    {
        return $this->HTMaladiesDegeneratives;
    }

    public function setHTMaladiesDegeneratives(bool $HTMaladiesDegeneratives): self
    {
        $this->HTMaladiesDegeneratives = $HTMaladiesDegeneratives;

        return $this;
    }

    public function getHTPsychique(): ?bool
    {
        return $this->HTPsychique;
    }

    public function setHTPsychique(bool $HTPsychique): self
    {
        $this->HTPsychique = $HTPsychique;

        return $this;
    }

    public function getHTAuditif(): ?bool
    {
        return $this->HTAuditif;
    }

    public function setHTAuditif(bool $HTAuditif): self
    {
        $this->HTAuditif = $HTAuditif;

        return $this;
    }

    public function getHTVisuel(): ?bool
    {
        return $this->HTVisuel;
    }

    public function setHTVisuel(bool $HTVisuel): self
    {
        $this->HTVisuel = $HTVisuel;

        return $this;
    }

    public function getHTMental(): ?bool
    {
        return $this->HTMental;
    }

    public function setHTMental(bool $HTMental): self
    {
        $this->HTMental = $HTMental;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(string $Mail): self
    {
        $this->Mail = $Mail;

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
}
