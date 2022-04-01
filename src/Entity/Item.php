<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="Id_gamer", columns={"Id_gamer"}), @ORM\Index(name="Id_infrastructure", columns={"Id_infrastructure"}), @ORM\Index(name="Id_horse", columns={"Id_horse"})})
 * @ORM\Entity
 */
class Item
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idItem;

    /**
     * @return int
     */
    public function getIdItem(): int
    {
        return $this->idItem;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
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
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getFamily(): ?string
    {
        return $this->family;
    }

    /**
     * @return int|null
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @return \Gamer
     */
    public function getIdGamer(): \Gamer
    {
        return $this->idGamer;
    }

    /**
     * @return \Horse
     */
    public function getIdHorse(): \Horse
    {
        return $this->idHorse;
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
    public function getIdCompetition(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idCompetition;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="family", type="string", length=50, nullable=true)
     */
    private $family;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var \Gamer
     *
     * @ORM\ManyToOne(targetEntity="Gamer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_gamer", referencedColumnName="Id_gamer")
     * })
     */
    private $idGamer;

    /**
     * @var \Horse
     *
     * @ORM\ManyToOne(targetEntity="Horse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_horse", referencedColumnName="Id_horse")
     * })
     */
    private $idHorse;

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
     * @ORM\ManyToMany(targetEntity="Competition", inversedBy="idItem")
     * @ORM\JoinTable(name="win",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_item", referencedColumnName="Id_item")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_competition", referencedColumnName="Id_competition")
     *   }
     * )
     */
    private $idCompetition;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCompetition = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
