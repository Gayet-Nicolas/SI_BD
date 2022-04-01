<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop", indexes={@ORM\Index(name="Id_equestrian_center", columns={"Id_equestrian_center"}), @ORM\Index(name="Id_horse_club", columns={"Id_horse_club"}), @ORM\Index(name="Id_item", columns={"Id_item"}), @ORM\Index(name="Id_infrastructure", columns={"Id_infrastructure"})})
 * @ORM\Entity
 */
class Shop
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_shop", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idShop;

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
     * @var \Infrastructure
     *
     * @ORM\ManyToOne(targetEntity="Infrastructure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_infrastructure", referencedColumnName="Id_infrastructure")
     * })
     */
    private $idInfrastructure;

    /**
     * @return int
     */
    public function getIdShop(): int
    {
        return $this->idShop;
    }

    /**
     * @return \EquestrianCenter
     */
    public function getIdEquestrianCenter(): \EquestrianCenter
    {
        return $this->idEquestrianCenter;
    }

    /**
     * @return \Infrastructure
     */
    public function getIdInfrastructure(): \Infrastructure
    {
        return $this->idInfrastructure;
    }

    /**
     * @return \HorseClub
     */
    public function getIdHorseClub(): \HorseClub
    {
        return $this->idHorseClub;
    }

    /**
     * @return \Item
     */
    public function getIdItem(): \Item
    {
        return $this->idItem;
    }

    /**
     * @var \HorseClub
     *
     * @ORM\ManyToOne(targetEntity="HorseClub")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_horse_club", referencedColumnName="Id_horse_club")
     * })
     */
    private $idHorseClub;

    /**
     * @var \Item
     *
     * @ORM\ManyToOne(targetEntity="Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_item", referencedColumnName="Id_item")
     * })
     */
    private $idItem;


}
