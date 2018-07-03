<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetsRepository")
 */
class Projets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Candidatures", cascade={"persist"})
     */

    private $id_projet;

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->id_projet;
    }

    /**
     * @param mixed $id_projet
     */
    public function setIdProjet($id_projet)
    {
        $this->id_projet = $id_projet;
    }

    /**
     * @ORM\Column(type="string", length=55, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=55, nullable=true)
     */
    private $type;
    /**
     * @ORM\Column(type="string", length=55, nullable=true)
     */
    private $entreprise;
    /**
     * @ORM\Column(type="string", unique=true, length=64, nullable=true)
     */
    private $artiste;
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $orientation;
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $theme;


    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png" })
     */
    private $image;
    /**
     * @ORM\Column(type="string", unique=true, length=150)
     */
    private $description;
    /**
     * @ORM\Column(type="integer")
     */
    private $budget;
    /**
     * @ORM\Column(type="integer")
     */
    private $largeur;
    /**
     * @ORM\Column(type="integer")
     */
    private $hauteur;
    /**
     * @ORM\Column(type="integer")
     */
    private $profondeur;




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
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
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
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * @param mixed $artiste
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;
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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param mixed $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @param mixed $largeur
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    /**
     * @return mixed
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * @param mixed $hauteur
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    /**
     * @return mixed
     */
    public function getProfondeur()
    {
        return $this->profondeur;
    }

    /**
     * @param mixed $profondeur
     */
    public function setProfondeur($profondeur)
    {
        $this->profondeur = $profondeur;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}
