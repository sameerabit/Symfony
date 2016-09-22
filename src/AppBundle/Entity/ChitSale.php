<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChitSale
 *
 * @ORM\Table(name="chit_sale", indexes={@ORM\Index(name="fk_chit_sale_sale1_idx", columns={"sale_id"})})
 * @ORM\Entity
 */
class ChitSale
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $amount;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_invoiced", type="boolean", nullable=true)
     */
    private $isInvoiced = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="chit_no", type="string", length=100, nullable=true)
     */
    private $chitNo;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=200, nullable=true)
     */
    private $customerName;

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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return ChitSale
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
     * @return ChitSale
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
     * Set isInvoiced
     *
     * @param boolean $isInvoiced
     *
     * @return ChitSale
     */
    public function setIsInvoiced($isInvoiced)
    {
        $this->isInvoiced = $isInvoiced;

        return $this;
    }

    /**
     * Get isInvoiced
     *
     * @return boolean
     */
    public function getIsInvoiced()
    {
        return $this->isInvoiced;
    }

    /**
     * Set chitNo
     *
     * @param string $chitNo
     *
     * @return ChitSale
     */
    public function setChitNo($chitNo)
    {
        $this->chitNo = $chitNo;

        return $this;
    }

    /**
     * Get chitNo
     *
     * @return string
     */
    public function getChitNo()
    {
        return $this->chitNo;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return ChitSale
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
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
     * @return ChitSale
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
}
