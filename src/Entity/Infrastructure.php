<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infrastructure
 *
 * @ORM\Table(name="infrastructure", indexes={@ORM\Index(name="Id_equestrian_center", columns={"Id_equestrian_center"})})
 * @ORM\Entity
 */
class Infrastructure
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_infrastructure", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInfrastructure;

    /**
     * @return int
     */
    public function getIdInfrastructure(): int
    {
        return $this->idInfrastructure;
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
     * @return string|null
     */
    public function getRessourcesConsumption(): ?string
    {
        return $this->ressourcesConsumption;
    }

    /**
     * @return int|null
     */
    public function getItemsCapacity(): ?int
    {
        return $this->itemsCapacity;
    }

    /**
     * @return int|null
     */
    public function getHorsesCapacity(): ?int
    {
        return $this->horsesCapacity;
    }

    /**
     * @return \EquestrianCenter
     */
    public function getIdEquestrianCenter(): \EquestrianCenter
    {
        return $this->idEquestrianCenter;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdHorseClub(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idHorseClub;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
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
     * @var string|null
     *
     * @ORM\Column(name="ressources_consumption", type="string", length=50, nullable=true)
     */
    private $ressourcesConsumption;

    /**
     * @var int|null
     *
     * @ORM\Column(name="items_capacity", type="integer", nullable=true)
     */
    private $itemsCapacity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="horses_capacity", type="integer", nullable=true)
     */
    private $horsesCapacity;

    /**
     * @var \EquestrianCenter
     *
     * @ORM\ManyToOne(targetEntity="EquestrianCenter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_equestrian_center", referencedColumnName="Id_equestrian_center")
     * })
     */
    private $idEquestrianCenter;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="HorseClub", mappedBy="idInfrastructure")
     */
    private $idHorseClub;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idHorseClub = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
