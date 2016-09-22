<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CashIssue
 *
 * @ORM\Table(name="cash_issue", indexes={@ORM\Index(name="fk_money_back_shift1_idx", columns={"shift_id"})})
 * @ORM\Entity
 */
class CashIssue
{
    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Shift
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Shift")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shift_id", referencedColumnName="id")
     * })
     */
    private $shift;



    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return CashIssue
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shift
     *
     * @param \AppBundle\Entity\Shift $shift
     *
     * @return CashIssue
     */
    public function setShift(\AppBundle\Entity\Shift $shift = null)
    {
        $this->shift = $shift;

        return $this;
    }

    /**
     * Get shift
     *
     * @return \AppBundle\Entity\Shift
     */
    public function getShift()
    {
        return $this->shift;
    }
}
