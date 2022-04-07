<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horse
 *
 * @ORM\Table(name="horse", indexes={@ORM\Index(name="Id_infrastructure", columns={"Id_infrastructure"})})
 * @ORM\Entity
 */
class Horse
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_horse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHorse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="race", type="string", length=50, nullable=true)
     */
    private $race;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resistance", type="integer", nullable=true)
     */
    private $resistance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="endurance", type="integer", nullable=true)
     */
    private $endurance;

    /**
     * @var int|null
     *
     * @ORM\Column(name="extension", type="integer", nullable=true)
     */
    private $extension;

    /**
     * @var int|null
     *
     * @ORM\Column(name="speed", type="integer", nullable=true)
     */
    private $speed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sociability", type="integer", nullable=true)
     */
    private $sociability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=true)
     */
    private $intelligence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="temperament", type="string", length=50, nullable=true)
     */
    private $temperament;

    /**
     * @var string|null
     *
     * @ORM\Column(name="health_status", type="string", length=50, nullable=true)
     */
    private $healthStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="moral_status", type="string", length=50, nullable=true)
     */
    private $moralStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stress_status", type="string", length=50, nullable=true)
     */
    private $stressStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fatigue_status", type="string", length=50, nullable=true)
     */
    private $fatigueStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hunger_status", type="string", length=50, nullable=true)
     */
    private $hungerStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="clearliness", type="integer", nullable=true)
     */
    private $clearliness;

    /**
     * @var int|null
     *
     * @ORM\Column(name="experience", type="integer", nullable=true)
     */
    private $experience;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var \Infrastructure
     *
     * @ORM\ManyToOne(targetEntity="Infrastructure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_infrastructure", referencedColumnName="Id_infrastructure")
     * })
     */
    private $idInfrastructure;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Disease", inversedBy="idHorse")
     * @ORM\JoinTable(name="has_disease",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_horse", referencedColumnName="Id_horse")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_disease", referencedColumnName="Id_disease")
     *   }
     * )
     */
    private $idDisease;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Injury", inversedBy="idHorse")
     * @ORM\JoinTable(name="has_injury",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_horse", referencedColumnName="Id_horse")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_injury", referencedColumnName="Id_injury")
     *   }
     * )
     */
    private $idInjury;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Parasite", inversedBy="idHorse")
     * @ORM\JoinTable(name="has_parasite",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_horse", referencedColumnName="Id_horse")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_parasite", referencedColumnName="Id_parasite")
     *   }
     * )
     */
    private $idParasite;

    /**
     * @return int
     */
    public function getIdHorse(): int
    {
        return $this->idHorse;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getRace(): ?string
    {
        return $this->race;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int|null
     */
    public function getResistance(): ?int
    {
        return $this->resistance;
    }

    /**
     * @return int|null
     */
    public function getEndurance(): ?int
    {
        return $this->endurance;
    }

    /**
     * @return int|null
     */
    public function getExtension(): ?int
    {
        return $this->extension;
    }

    /**
     * @return int|null
     */
    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    /**
     * @return int|null
     */
    public function getSociability(): ?int
    {
        return $this->sociability;
    }

    /**
     * @return int|null
     */
    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    /**
     * @return string|null
     */
    public function getTemperament(): ?string
    {
        return $this->temperament;
    }

    /**
     * @return string|null
     */
    public function getHealthStatus(): ?string
    {
        return $this->healthStatus;
    }

    /**
     * @return string|null
     */
    public function getMoralStatus(): ?string
    {
        return $this->moralStatus;
    }

    /**
     * @return string|null
     */
    public function getStressStatus(): ?string
    {
        return $this->stressStatus;
    }

    /**
     * @return string|null
     */
    public function getFatigueStatus(): ?string
    {
        return $this->fatigueStatus;
    }

    /**
     * @return string|null
     */
    public function getHungerStatus(): ?string
    {
        return $this->hungerStatus;
    }

    /**
     * @return int|null
     */
    public function getClearliness(): ?int
    {
        return $this->clearliness;
    }

    /**
     * @return int|null
     */
    public function getExperience(): ?int
    {
        return $this->experience;
    }

    /**
     * @return int|null
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @return \Infrastructure
     */
    public function getIdInfrastructure(): \Infrastructure
    {
        return $this->idInfrastructure;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdDisease(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idDisease;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdInjury(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idInjury;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdParasite(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idParasite;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDisease = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idInjury = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idParasite = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
