<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HorseClub
 *
 * @ORM\Table(name="horse_club", indexes={@ORM\Index(name="IdGamer", columns={"IdGamer"})})
 * @ORM\Entity
 */
class HorseClub
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_horse_club", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHorseClub;

    /**
     * @return int
     */
    public function getIdHorseClub(): int
    {
        return $this->idHorseClub;
    }

    /**
     * @return int|null
     */
    public function getMembershipFees(): ?int
    {
        return $this->membershipFees;
    }

    /**
     * @return int|null
     */
    public function getReceptionCapacity(): ?int
    {
        return $this->receptionCapacity;
    }

    /**
     * @return \Gamer
     */
    public function getIdgamer(): \Gamer
    {
        return $this->idgamer;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdInfrastructure(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idInfrastructure;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="membership_fees", type="integer", nullable=true)
     */
    private $membershipFees;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reception_capacity", type="integer", nullable=true)
     */
    private $receptionCapacity;

    /**
     * @var \Gamer
     *
     * @ORM\ManyToOne(targetEntity="Gamer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdGamer", referencedColumnName="Id_gamer")
     * })
     */
    private $idgamer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Infrastructure", inversedBy="idHorseClub")
     * @ORM\JoinTable(name="composed_by",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_horse_club", referencedColumnName="Id_horse_club")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_infrastructure", referencedColumnName="Id_infrastructure")
     *   }
     * )
     */
    private $idInfrastructure;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Gamer", mappedBy="idHorseClub")
     */
    private $idGamer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idInfrastructure = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idGamer = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
