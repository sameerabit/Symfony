<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnNote
 *
 * @ORM\Table(name="return_note", indexes={@ORM\Index(name="fk_return_note_purchase_invoice1_idx", columns={"purchase_invoice_id"})})
 * @ORM\Entity
 */
class ReturnNote
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=true)
     */
    private $dateTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

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
     * @var \AppBundle\Entity\PurchaseInvoice
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PurchaseInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_invoice_id", referencedColumnName="id")
     * })
     */
    private $purchaseInvoice;



    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     *
     * @return ReturnNote
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ReturnNote
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return ReturnNote
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
     * @return ReturnNote
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
     * Set status
     *
     * @param boolean $status
     *
     * @return ReturnNote
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
     * Set purchaseInvoice
     *
     * @param \AppBundle\Entity\PurchaseInvoice $purchaseInvoice
     *
     * @return ReturnNote
     */
    public function setPurchaseInvoice(\AppBundle\Entity\PurchaseInvoice $purchaseInvoice = null)
    {
        $this->purchaseInvoice = $purchaseInvoice;

        return $this;
    }

    /**
     * Get purchaseInvoice
     *
     * @return \AppBundle\Entity\PurchaseInvoice
     */
    public function getPurchaseInvoice()
    {
        return $this->purchaseInvoice;
    }
}
