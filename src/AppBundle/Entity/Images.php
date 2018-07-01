<?php
/**
 * Created by PhpStorm.
 * User: alexandresmagghe
 * Date: 30/06/2018
 * Time: 21:51
 */

namespace AppBundle\Entity;


class Images
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="realisations")
     * @ORM\JoinColumn(nullable=false)
     */
    public $image_real;
}