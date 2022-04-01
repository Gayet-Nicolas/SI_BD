<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item", indexes={@ORM\Index(name="Id_infrastructure", columns={"Id_infrastructure"}), @ORM\Index(name="Id_horse", columns={"Id_horse"}), @ORM\Index(name="Id_gamer", columns={"Id_gamer"})})
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
     * @var \Infrastructure
     *
     * @ORM\ManyToOne(targetEntity="Infrastructure")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_infrastructure", referencedColumnName="Id_infrastructure")
     * })
     */
    private $idInfrastructure;

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
