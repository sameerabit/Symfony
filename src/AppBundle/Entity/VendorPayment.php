<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VendorPayment
 *
 * @ORM\Table(name="vendor_payment", indexes={@ORM\Index(name="fk_creditor_payment_purchase_invoice1_idx", columns={"purchase_invoice_id"}), @ORM\Index(name="fk_creditor_payment_payment1_idx", columns={"payment_id"})})
 * @ORM\Entity
 */
class VendorPayment
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pay_date", type="date", nullable=true)
     */
    private $payDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Payment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Payment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;

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
     * Set payDate
     *
     * @param \DateTime $payDate
     *
     * @return VendorPayment
     */
    public function setPayDate($payDate)
    {
        $this->payDate = $payDate;

        return $this;
    }

    /**
     * Get payDate
     *
     * @return \DateTime
     */
    public function getPayDate()
    {
        return $this->payDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return VendorPayment
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
     * @return VendorPayment
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
     * @return VendorPayment
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
     * Set amount
     *
     * @param string $amount
     *
     * @return VendorPayment
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
     * Set status
     *
     * @param boolean $status
     *
     * @return VendorPayment
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
     * Set payment
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return VendorPayment
     */
    public function setPayment(\AppBundle\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \AppBundle\Entity\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set purchaseInvoice
     *
     * @param \AppBundle\Entity\PurchaseInvoice $purchaseInvoice
     *
     * @return VendorPayment
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
