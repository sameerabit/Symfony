<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseInvoice
 *
 * @ORM\Table(name="purchase_invoice", indexes={@ORM\Index(name="fk_purchase_invoice_good_recieve_note1_idx", columns={"good_recieve_note_id"})})
 * @ORM\Entity
 */
class PurchaseInvoice
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="payment_status", type="boolean", nullable=true)
     */
    private $paymentStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="date", nullable=true)
     */
    private $deletedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\GoodRecieveNote
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\GoodRecieveNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="good_recieve_note_id", referencedColumnName="id")
     * })
     */
    private $goodRecieveNote;



    /**
     * Set paymentStatus
     *
     * @param boolean $paymentStatus
     *
     * @return PurchaseInvoice
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return boolean
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return PurchaseInvoice
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return PurchaseInvoice
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return PurchaseInvoice
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return PurchaseInvoice
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
     * Set status
     *
     * @param boolean $status
     *
     * @return PurchaseInvoice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set goodRecieveNote
     *
     * @param \AppBundle\Entity\GoodRecieveNote $goodRecieveNote
     *
     * @return PurchaseInvoice
     */
    public function setGoodRecieveNote(\AppBundle\Entity\GoodRecieveNote $goodRecieveNote = null)
    {
        $this->goodRecieveNote = $goodRecieveNote;

        return $this;
    }

    /**
     * Get goodRecieveNote
     *
     * @return \AppBundle\Entity\GoodRecieveNote
     */
    public function getGoodRecieveNote()
    {
        return $this->goodRecieveNote;
    }
}
