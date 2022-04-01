<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table(name="competition", indexes={@ORM\Index(name="Id_infrastructure", columns={"Id_infrastructure"})})
 * @ORM\Entity
 */
class Competition
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_competition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompetition;

    /**
     * @return int
     */
    public function getIdCompetition(): int
    {
        return $this->idCompetition;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime|null
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * @return int|null
     */
    public function getFees(): ?int
    {
        return $this->fees;
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
    public function getIdGamer(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idGamer;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdItem(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idItem;
    }

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fees", type="integer", nullable=true)
     */
    private $fees;

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
     * @ORM\ManyToMany(targetEntity="Gamer", mappedBy="idCompetition")
     */
    private $idGamer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Item", mappedBy="idCompetition")
     */
    private $idItem;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idGamer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idItem = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
