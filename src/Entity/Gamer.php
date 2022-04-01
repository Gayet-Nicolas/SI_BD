<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use MongoDB\BSON\Binary;

/**
 * Gamer
 *
 * @ORM\Table(name="gamer")
 * @ORM\Entity
 */
class Gamer
{
    /**
     * @return int
     */
    public function getIdGamer(): int
    {
        return $this->idGamer;
    }

    /**
     * @param int $idGamer
     */
    public function setIdGamer(int $idGamer): void
    {
        $this->idGamer = $idGamer;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     */
    public function setLastname(?string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     */
    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return int|null
     */
    public function getSex(): ?int
    {
        return $this->sex;
    }

    /**
     * @param int|null $sex
     */
    public function setSex(?int $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthDate(): ?\DateTime
    {
        return $this->birthDate;
    }

    /**
     * @param \DateTime|null $birthDate
     */
    public function setBirthDate(?\DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string|null $avatar
     */
    public function setAvatar(?string $avatar): void
    {
        $this->avatar = $avatar;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getWebsiteAddress(): ?string
    {
        return $this->websiteAddress;
    }

    /**
     * @param string|null $websiteAddress
     */
    public function setWebsiteAddress(?string $websiteAddress): void
    {
        $this->websiteAddress = $websiteAddress;
    }

    /**
     * @return int|null
     */
    public function getBankAccount(): ?int
    {
        return $this->bankAccount;
    }

    /**
     * @param int|null $bankAccount
     */
    public function setBankAccount(?int $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastConnexionDate(): ?\DateTime
    {
        return $this->lastConnexionDate;
    }

    /**
     * @param \DateTime|null $lastConnexionDate
     */
    public function setLastConnexionDate(?\DateTime $lastConnexionDate): void
    {
        $this->lastConnexionDate = $lastConnexionDate;
    }

    /**
     * @return int|null
     */
    public function getHorsesCapacity(): ?int
    {
        return $this->horsesCapacity;
    }

    /**
     * @param int|null $horsesCapacity
     */
    public function setHorsesCapacity(?int $horsesCapacity): void
    {
        $this->horsesCapacity = $horsesCapacity;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCompetition(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idCompetition;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idCompetition
     */
    public function setIdCompetition(\Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection $idCompetition): void
    {
        $this->idCompetition = $idCompetition;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdHorseClub(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idHorseClub;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idHorseClub
     */
    public function setIdHorseClub(\Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection $idHorseClub): void
    {
        $this->idHorseClub = $idHorseClub;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="Id_gamer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $idGamer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=true)
     */
    private ?string $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private ?string $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=41, nullable=true)
     */
    private ?string $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private ?string $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private ?string $firstname;

    /**
     * @var int|null
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
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private ?string $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=true)
     */
    private ?string $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avatar", type="string", length=50, nullable=true)
     */
    private ?string $avatar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private ?string $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_address", type="string", length=50, nullable=true)
     */
    private ?string $websiteAddress;

    /**
     * @var int|null
     *
     * @ORM\Column(name="bank_account", type="integer", nullable=true)
     */
    private ?int $bankAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=15, nullable=true)
     */
    private ?string $ipAddress;

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
    private ?int $horsesCapacity;

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
