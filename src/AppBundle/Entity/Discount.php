<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discount
 *
 * @ORM\Table(name="discount", indexes={@ORM\Index(name="fk_item_discounts_invt_item_idx", columns={"invt_item_id"})})
 * @ORM\Entity
 */
class Discount
{
    /**
     * @var string
     *
     * @ORM\Column(name="selling_qty", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sellingQty;

    /**
     * @var string
     *
     * @ORM\Column(name="selling_free_qty", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sellingFreeQty;

    /**
     * @var string
     *
     * @ORM\Column(name="buying_qty", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $buyingQty;

    /**
     * @var string
     *
     * @ORM\Column(name="buying_free_qty", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $buyingFreeQty;

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
     *   @ORM\JoinColumn(name="invt_item_id", referencedColumnName="id")
     * })
     */
    private $invtItem;



    /**
     * Set sellingQty
     *
     * @param string $sellingQty
     *
     * @return Discount
     */
    public function setSellingQty($sellingQty)
    {
        $this->sellingQty = $sellingQty;

        return $this;
    }

    /**
     * Get sellingQty
     *
     * @return string
     */
    public function getSellingQty()
    {
        return $this->sellingQty;
    }

    /**
     * Set sellingFreeQty
     *
     * @param string $sellingFreeQty
     *
     * @return Discount
     */
    public function setSellingFreeQty($sellingFreeQty)
    {
        $this->sellingFreeQty = $sellingFreeQty;

        return $this;
    }

    /**
     * Get sellingFreeQty
     *
     * @return string
     */
    public function getSellingFreeQty()
    {
        return $this->sellingFreeQty;
    }

    /**
     * Set buyingQty
     *
     * @param string $buyingQty
     *
     * @return Discount
     */
    public function setBuyingQty($buyingQty)
    {
        $this->buyingQty = $buyingQty;

        return $this;
    }

    /**
     * Get buyingQty
     *
     * @return string
     */
    public function getBuyingQty()
    {
        return $this->buyingQty;
    }

    /**
     * Set buyingFreeQty
     *
     * @param string $buyingFreeQty
     *
     * @return Discount
     */
    public function setBuyingFreeQty($buyingFreeQty)
    {
        $this->buyingFreeQty = $buyingFreeQty;

        return $this;
    }

    /**
     * Get buyingFreeQty
     *
     * @return string
     */
    public function getBuyingFreeQty()
    {
        return $this->buyingFreeQty;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Discount
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
     * Set invtItem
     *
     * @param \AppBundle\Entity\InvtItem $invtItem
     *
     * @return Discount
     */
    public function setInvtItem(\AppBundle\Entity\InvtItem $invtItem = null)
    {
        $this->invtItem = $invtItem;

        return $this;
    }

    /**
     * Get invtItem
     *
     * @return \AppBundle\Entity\InvtItem
     */
    public function getInvtItem()
    {
        return $this->invtItem;
    }
}
