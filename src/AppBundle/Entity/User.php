<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=70, nullable=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=55, unique=true)
     * @Assert\Email()
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=64)
     */
    public $art_ent;



    /**
     * @return mixed
     */
    public function getArtEnt()
    {
        return $this->art_ent;
    }

    /**
     * @param mixed $art_ent
     */
    public function setArtEnt($art_ent)
    {
        $this->art_ent = $art_ent;
    }

    /**
     * @ORM\Column(type="string", unique=true, length=64)
     */
    private $password;
    /**
     * @Assert\Length(max=4096)
     */
    private $plainPassword;
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\File(maxSize = "20048k", mimeTypes={ "image/jpeg" })
     */
    public $photo_profil;
    /**
     * @ORM\Column(name="filename" type="string", nullable=true)
     */
    public $real_name;
/**
    * @UploadableField(name='filename", path="web/uploads")
     */
    public $realisations;

    /**
     * @return mixed
     */
    public function getRealisations()
    {
        return $this->realisations;
    }

    /**
     * @param mixed $realisations
     */
    public function setRealisations($realisations)
    {
        $this->realisations = $realisations;
    }
    /**
     * @ORM\Column(type="boolean")
     */
    private $isAdmin = false;
    /**
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
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
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * @param mixed $secteur
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;
    }

    /**
     * @return mixed
     */
    public function getProjets()
    {
        return $this->projets;
    }

    /**
     * @param mixed $projets
     */
    public function setProjets($projets)
    {
        $this->projets = $projets;
    }
    private $resetPasswordToken = false;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $adresse;
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $telephone;
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $prenom;

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
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $description;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $histoire;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $activite;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $identite;

    /**
     * @return mixed
     */
    public function getHistoire()
    {
        return $this->histoire;
    }

    /**
     * @param mixed $histoire
     */
    public function setHistoire($histoire)
    {
        $this->histoire = $histoire;
    }

    /**
     * @return mixed
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * @param mixed $activite
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;
    }

    /**
     * @return mixed
     */
    public function getIdentite()
    {
        return $this->identite;
    }

    /**
     * @param mixed $identite
     */
    public function setIdentite($identite)
    {
        $this->identite = $identite;
    }
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $experience;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $formation;



    /**
     * @return mixed
     */
    public function getPhotoProfil()
    {
        return $this->photo_profil;
    }

    /**
     * @param mixed $photo_profil
     */
    public function setPhotoProfil($photo_profil)
    {
        $this->photo_profil = $photo_profil;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
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
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $secteur;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $projets;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $raison_sociale;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $siren;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $siret;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $telephone_ent;
    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $adresse_ent;

    /**
     * @return mixed
     */
    public function getRaisonSociale()
    {
        return $this->raison_sociale;
    }

    /**
     * @param mixed $raison_sociale
     */
    public function setRaisonSociale($raison_sociale)
    {
        $this->raison_sociale = $raison_sociale;
    }

    /**
     * @return mixed
     */
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * @param mixed $siren
     */
    public function setSiren($siren)
    {
        $this->siren = $siren;
    }

    /**
     * @return mixed
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * @param mixed $siret
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }

    /**
     * @return mixed
     */
    public function getTelephoneEnt()
    {
        return $this->telephone_ent;
    }

    /**
     * @param mixed $telephone_ent
     */
    public function setTelephoneEnt($telephone_ent)
    {
        $this->telephone_ent = $telephone_ent;
    }

    /**
     * @return mixed
     */
    public function getAdresseEnt()
    {
        return $this->adresse_ent;
    }

    /**
     * @param mixed $adresse_ent
     */
    public function setAdresseEnt($adresse_ent)
    {
        $this->adresse_ent = $adresse_ent;
    }









    public function getUsername()
    {
        return $this->username;
    }
    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }




    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }



    /**
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        if ($this->getIsAdmin()) {
            return ['ROLE_ADMIN'];
        }
        return ['ROLE_USER'];
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            ) = unserialize($serialized);
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }


    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    /**
     * @return mixed
     */
    public function getResetPasswordToken()
    {
        return $this->resetPasswordToken;
    }
    /**
     * @param mixed $resetPasswordToken
     */
    public function setResetPasswordToken($resetPasswordToken)
    {
        $this->resetPasswordToken = $resetPasswordToken;
    }

}
