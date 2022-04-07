<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquestrianCenter
 *
 * @ORM\Table(name="equestrian_center", indexes={@ORM\Index(name="Id_gamer", columns={"Id_gamer"})})
 * @ORM\Entity
 */
class EquestrianCenter
{
    /**
     * @return int
     */
    public function getIdEquestrianCenter(): int
    {
        return $this->idEquestrianCenter;
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
    public function getIdGamer(): \Gamer
    {
        return $this->idGamer;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="Id_equestrian_center", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquestrianCenter;

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
     *   @ORM\JoinColumn(name="Id_gamer", referencedColumnName="Id_gamer")
     * })
     */
    private $idGamer;


}
