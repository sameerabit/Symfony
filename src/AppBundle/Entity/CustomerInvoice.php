<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerInvoice
 *
 * @ORM\Table(name="customer_invoice", indexes={@ORM\Index(name="fk_customer_invoice_company1_idx", columns={"company_id"})})
 * @ORM\Entity
 */
class CustomerInvoice
{
    /**
     * @var string
     *
     * @ORM\Column(name="invoice_id", type="string", length=45, nullable=true)
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=45, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inv_date", type="date", nullable=true)
     */
    private $invDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_paid", type="boolean", nullable=false)
     */
    private $isPaid = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_invoice_date", type="datetime", nullable=true)
     */
    private $lastInvoiceDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;



    /**
     * Set invoiceId
     *
     * @param string $invoiceId
     *
     * @return CustomerInvoice
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * Get invoiceId
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return CustomerInvoice
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
     * Set invDate
     *
     * @param \DateTime $invDate
     *
     * @return CustomerInvoice
     */
    public function setInvDate($invDate)
    {
        $this->invDate = $invDate;

        return $this;
    }

    /**
     * Get invDate
     *
     * @return \DateTime
     */
    public function getInvDate()
    {
        return $this->invDate;
    }

    /**
     * Set isPaid
     *
     * @param boolean $isPaid
     *
     * @return CustomerInvoice
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    /**
     * Get isPaid
     *
     * @return boolean
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Set lastInvoiceDate
     *
     * @param \DateTime $lastInvoiceDate
     *
     * @return CustomerInvoice
     */
    public function setLastInvoiceDate($lastInvoiceDate)
    {
        $this->lastInvoiceDate = $lastInvoiceDate;

        return $this;
    }

    /**
     * Get lastInvoiceDate
     *
     * @return \DateTime
     */
    public function getLastInvoiceDate()
    {
        return $this->lastInvoiceDate;
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
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return CustomerInvoice
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }
}
