<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidaturesRepository")
 */
class Candidatures
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $type;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $titre;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $theme;
/**
     * @ORM\Column(type="string", length=150)
     */
    private $description_candidature;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $orientation;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $croquis;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $prenom;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $telephone_candidature;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $date_de_naissance;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $specialite;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $formation;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $site;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $behance;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $autre;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $presentation;
    /**
     * @ORM\Column(type="string", length=150)
     */
    private $reference;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getDescriptionCandidature()
    {
        return $this->description_candidature;
    }

    /**
     * @param mixed $description_candidature
     */
    public function setDescriptionCandidature($description_candidature)
    {
        $this->description_candidature = $description_candidature;
    }

    /**
     * @return mixed
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param mixed $orientation
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    /**
     * @return mixed
     */
    public function getCroquis()
    {
        return $this->croquis;
    }

    /**
     * @param mixed $croquis
     */
    public function setCroquis($croquis)
    {
        $this->croquis = $croquis;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTelephoneCandidature()
    {
        return $this->telephone_candidature;
    }

    /**
     * @param mixed $telephone_candidature
     */
    public function setTelephoneCandidature($telephone_candidature)
    {
        $this->telephone_candidature = $telephone_candidature;
    }

    /**
     * @return mixed
     */
    public function getDateDeNaissance()
    {
        return $this->date_de_naissance;
    }

    /**
     * @param mixed $date_de_naissance
     */
    public function setDateDeNaissance($date_de_naissance)
    {
        $this->date_de_naissance = $date_de_naissance;
    }

    /**
     * @return mixed
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    /**
     * @return mixed
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param mixed $formation
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return mixed
     */
    public function getBehance()
    {
        return $this->behance;
    }

    /**
     * @param mixed $behance
     */
    public function setBehance($behance)
    {
        $this->behance = $behance;
    }

    /**
     * @return mixed
     */
    public function getAutre()
    {
        return $this->autre;
    }

    /**
     * @param mixed $autre
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;
    }

    /**
     * @return mixed
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * @param mixed $presentation
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }
    public function getId()
    {
        return $this->id;
    }
}
