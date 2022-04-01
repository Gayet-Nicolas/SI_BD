<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gamer
 *
 * @ORM\Table(name="gamer")
 * @ORM\Entity
 */
class Gamer
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_gamer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGamer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=41, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var binary|null
     *
     * @ORM\Column(name="sex", type="binary", nullable=true)
     */
    private $sex;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth_date", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="phone", type="integer", nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress", type="string", length=50, nullable=true)
     */
    private $adress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avatar", type="string", length=50, nullable=true)
     */
    private $avatar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_adress", type="string", length=50, nullable=true)
     */
    private $websiteAdress;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bank_account", type="integer", nullable=true)
     */
    private $bankAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_adress", type="string", length=15, nullable=true)
     */
    private $ipAdress;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_connexion_date", type="date", nullable=true)
     */
    private $lastConnexionDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="horses_capacity", type="integer", nullable=true)
     */
    private $horsesCapacity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Competition", inversedBy="idGamer")
     * @ORM\JoinTable(name="participate",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_gamer", referencedColumnName="Id_gamer")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_competition", referencedColumnName="Id_competition")
     *   }
     * )
     */
    private $idCompetition;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="HorseClub", inversedBy="idGamer")
     * @ORM\JoinTable(name="subscribe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_gamer", referencedColumnName="Id_gamer")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_horse_club", referencedColumnName="Id_horse_club")
     *   }
     * )
     */
    private $idHorseClub;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCompetition = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idHorseClub = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
