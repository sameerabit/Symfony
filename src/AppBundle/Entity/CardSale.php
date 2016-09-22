<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CardSale
 *
 * @ORM\Table(name="card_sale", indexes={@ORM\Index(name="fk_card_sale_sale1_idx", columns={"sale_id"})})
 * @ORM\Entity
 */
class CardSale
{
    /**
     * @var integer
     *
     * @ORM\Column(name="card_no", type="integer", nullable=true)
     */
    private $cardNo;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

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
     * Set cardNo
     *
     * @param integer $cardNo
     *
     * @return CardSale
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;

        return $this;
    }

    /**
     * Get cardNo
     *
     * @return integer
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return CardSale
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
     * @return CardSale
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
     * Set customerName
     *
     * @param string $customerName
     *
     * @return CardSale
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
     * @return CardSale
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
