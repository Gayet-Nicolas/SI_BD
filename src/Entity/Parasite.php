<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parasite
 *
 * @ORM\Table(name="parasite")
 * @ORM\Entity
 */
class Parasite
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_parasite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParasite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @return int
     */
    public function getIdParasite(): int
    {
        return $this->idParasite;
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
     * @ORM\ManyToMany(targetEntity="Horse", mappedBy="idParasite")
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
