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
     * @return int
     */
    public function getIdGamer(): int
    {
        return $this->idGamer;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @return bool|null
     */
    public function getSex(): ?bool
    {
        return $this->sex;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthDate(): ?\DateTime
    {
        return $this->birthDate;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getWebsiteAddress(): ?string
    {
        return $this->websiteAddress;
    }

    /**
     * @return int|null
     */
    public function getBankAccount(): ?int
    {
        return $this->bankAccount;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastConnexionDate(): ?\DateTime
    {
        return $this->lastConnexionDate;
    }

    /**
     * @return int|null
     */
    public function getHorsesCapacity(): ?int
    {
        return $this->horsesCapacity;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCompetition(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idCompetition;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdHorseClub(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idHorseClub;
    }

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sex", type="boolean", nullable=true)
     */
    private $sex;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth_date", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=true)
     */
    private $address;

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
     * @ORM\Column(name="website_address", type="string", length=50, nullable=true)
     */
    private $websiteAddress;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bank_account", type="integer", nullable=true)
     */
    private $bankAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=15, nullable=true)
     */
    private $ipAddress;

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
