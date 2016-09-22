<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LooseSale
 *
 * @ORM\Table(name="loose_sale", indexes={@ORM\Index(name="fk_sale_detail_idx", columns={"sale_detail_id"}), @ORM\Index(name="fk_item_idx", columns={"item_id"})})
 * @ORM\Entity
 */
class LooseSale
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
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $price;

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
     * @var \AppBundle\Entity\SaleDetail
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SaleDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_detail_id", referencedColumnName="sale_id")
     * })
     */
    private $saleDetail;



    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return LooseSale
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
     * Set price
     *
     * @param string $price
     *
     * @return LooseSale
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
     * @return LooseSale
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
     * Set saleDetail
     *
     * @param \AppBundle\Entity\SaleDetail $saleDetail
     *
     * @return LooseSale
     */
    public function setSaleDetail(\AppBundle\Entity\SaleDetail $saleDetail = null)
    {
        $this->saleDetail = $saleDetail;

        return $this;
    }

    /**
     * Get saleDetail
     *
     * @return \AppBundle\Entity\SaleDetail
     */
    public function getSaleDetail()
    {
        return $this->saleDetail;
    }
}
