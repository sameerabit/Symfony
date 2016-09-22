<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerPayment
 *
 * @ORM\Table(name="customer_payment", indexes={@ORM\Index(name="fk_customer_payment_payment1_idx", columns={"payment_id"}), @ORM\Index(name="fk_customer_payment_customer_invoice1_idx", columns={"customer_invoice_id"})})
 * @ORM\Entity
 */
class CustomerPayment
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pay_date", type="date", nullable=true)
     */
    private $payDate;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\CustomerInvoice
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CustomerInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_invoice_id", referencedColumnName="id")
     * })
     */
    private $customerInvoice;

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
     * Set payDate
     *
     * @param \DateTime $payDate
     *
     * @return CustomerPayment
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
     * Set type
     *
     * @param string $type
     *
     * @return CustomerPayment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * @return CustomerPayment
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
     * Set customerInvoice
     *
     * @param \AppBundle\Entity\CustomerInvoice $customerInvoice
     *
     * @return CustomerPayment
     */
    public function setCustomerInvoice(\AppBundle\Entity\CustomerInvoice $customerInvoice = null)
    {
        $this->customerInvoice = $customerInvoice;

        return $this;
    }

    /**
     * Get customerInvoice
     *
     * @return \AppBundle\Entity\CustomerInvoice
     */
    public function getCustomerInvoice()
    {
        return $this->customerInvoice;
    }

    /**
     * Set payment
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return CustomerPayment
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
}
