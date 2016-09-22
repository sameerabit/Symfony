<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IssuedLooseFuel
 *
 * @ORM\Table(name="issued_loose_fuel", indexes={@ORM\Index(name="fk_issued_loose_fuel_shift1_idx", columns={"shift_id"}), @ORM\Index(name="fk_issued_loose_fuel_invt_item1_idx", columns={"id_item"})})
 * @ORM\Entity
 */
class IssuedLooseFuel
{
    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtItem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item", referencedColumnName="id")
     * })
     */
    private $idItem;

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
     * @return IssuedLooseFuel
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return IssuedLooseFuel
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return IssuedLooseFuel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return IssuedLooseFuel
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * Set idItem
     *
     * @param \AppBundle\Entity\InvtItem $idItem
     *
     * @return IssuedLooseFuel
     */
    public function setIdItem(\AppBundle\Entity\InvtItem $idItem = null)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return \AppBundle\Entity\InvtItem
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set shift
     *
     * @param \AppBundle\Entity\Shift $shift
     *
     * @return IssuedLooseFuel
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
