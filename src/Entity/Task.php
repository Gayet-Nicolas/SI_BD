<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task", indexes={@ORM\Index(name="Id_item", columns={"Id_item"})})
 * @ORM\Entity
 */
class Task
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_task", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTask;

    /**
     * @var string|null
     *
     * @ORM\Column(name="caption", type="string", length=50, nullable=true)
     */
    private $caption;

    /**
     * @var int|null
     *
     * @ORM\Column(name="frequency", type="integer", nullable=true)
     */
    private $frequency;

    /**
     * @return int
     */
    public function getIdTask(): int
    {
        return $this->idTask;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return int|null
     */
    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    /**
     * @return \Item
     */
    public function getIdItem(): \Item
    {
        return $this->idItem;
    }

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
