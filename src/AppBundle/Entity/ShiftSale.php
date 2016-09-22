<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShiftSale
 *
 * @ORM\Table(name="shift_sale", indexes={@ORM\Index(name="fk_shift_sale_shift1_idx", columns={"shift_id"}), @ORM\Index(name="fk_shift_sale_sale1_idx", columns={"sale_id"})})
 * @ORM\Entity
 */
class ShiftSale
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Sale
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_id", referencedColumnName="id")
     * })
     */
    private $sale;

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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return ShiftSale
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
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
     * Set sale
     *
     * @param \AppBundle\Entity\Sale $sale
     *
     * @return ShiftSale
     */
    public function setSale(\AppBundle\Entity\Sale $sale = null)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return \AppBundle\Entity\Sale
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Set shift
     *
     * @param \AppBundle\Entity\Shift $shift
     *
     * @return ShiftSale
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
