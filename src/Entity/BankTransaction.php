<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankTransaction
 *
 * @ORM\Table(name="bank_transaction", indexes={@ORM\Index(name="Id_gamer", columns={"Id_gamer"})})
 * @ORM\Entity
 */
class BankTransaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_bank_transaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBankTransaction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

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
