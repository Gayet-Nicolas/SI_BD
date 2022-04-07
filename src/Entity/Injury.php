<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Injury
 *
 * @ORM\Table(name="injury")
 * @ORM\Entity
 */
class Injury
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_injury", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInjury;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Horse", mappedBy="idInjury")
     */
    private $idHorse;

    /**
     * @return int
     */
    public function getIdInjury(): int
    {
        return $this->idInjury;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdHorse(): \Doctrine\Common\Collections\ArrayCollection|\Doctrine\Common\Collections\Collection
    {
        return $this->idHorse;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idHorse = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
