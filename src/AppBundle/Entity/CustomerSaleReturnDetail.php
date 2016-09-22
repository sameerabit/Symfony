<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerSaleReturnDetail
 *
 * @ORM\Table(name="customer_sale_return_detail", indexes={@ORM\Index(name="cus_return_id", columns={"cus_return_id", "item_id"}), @ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="IDX_284E1E8CEB06EDBA", columns={"cus_return_id"})})
 * @ORM\Entity
 */
class CustomerSaleReturnDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $qty;

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
     * @var \AppBundle\Entity\CustomerSaleReturn
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\CustomerSaleReturn")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cus_return_id", referencedColumnName="id")
     * })
     */
    private $cusReturn;

    /**
     * @var \AppBundle\Entity\InvtItem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;



    /**
     * Set price
     *
     * @param string $price
     *
     * @return CustomerSaleReturnDetail
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set qty
     *
     * @param string $qty
     *
     * @return CustomerSaleReturnDetail
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return CustomerSaleReturnDetail
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
     * Set cusReturn
     *
     * @param \AppBundle\Entity\CustomerSaleReturn $cusReturn
     *
     * @return CustomerSaleReturnDetail
     */
    public function setCusReturn(\AppBundle\Entity\CustomerSaleReturn $cusReturn = null)
    {
        $this->cusReturn = $cusReturn;

        return $this;
    }

    /**
     * Get cusReturn
     *
     * @return \AppBundle\Entity\CustomerSaleReturn
     */
    public function getCusReturn()
    {
        return $this->cusReturn;
    }

    /**
     * Set item
     *
     * @param \AppBundle\Entity\InvtItem $item
     *
     * @return CustomerSaleReturnDetail
     */
    public function setItem(\AppBundle\Entity\InvtItem $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \AppBundle\Entity\InvtItem
     */
    public function getItem()
    {
        return $this->item;
    }
}
