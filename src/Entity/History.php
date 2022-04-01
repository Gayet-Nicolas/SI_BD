<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history")
 * @ORM\Entity
 */
class History
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_action", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAction;

    /**
     * @return int
     */
    public function getIdAction(): int
    {
        return $this->idAction;
    }

    /**
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="action", type="string", length=50, nullable=true)
     */
    private $action;


}
