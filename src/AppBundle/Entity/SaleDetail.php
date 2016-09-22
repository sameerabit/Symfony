<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SaleDetail
 *
 * @ORM\Table(name="sale_detail", indexes={@ORM\Index(name="fk_sale_detail_sale1_idx", columns={"sale_id"}), @ORM\Index(name="fk_sale_detail_invt_item1_idx", columns={"item_id"})})
 * @ORM\Entity
 */
class SaleDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=10, scale=2, nullable=true)
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
     * @var \AppBundle\Entity\InvtItem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;

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
     * Set price
     *
     * @param string $price
     *
     * @return SaleDetail
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
     * @return SaleDetail
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
     * @return SaleDetail
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
     * Set item
     *
     * @param \AppBundle\Entity\InvtItem $item
     *
     * @return SaleDetail
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

    /**
     * Set sale
     *
     * @param \AppBundle\Entity\Sale $sale
     *
     * @return SaleDetail
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
