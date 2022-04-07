<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disease
 *
 * @ORM\Table(name="disease")
 * @ORM\Entity
 */
class Disease
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_disease", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDisease;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @return int
     */
    public function getIdDisease(): int
    {
        return $this->idDisease;
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Horse", mappedBy="idDisease")
     */
    private $idHorse;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idHorse = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
