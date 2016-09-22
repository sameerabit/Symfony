<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseOrderDetails
 *
 * @ORM\Table(name="purchase_order_details", indexes={@ORM\Index(name="fk_purchase_order_details_purchase_order1_idx", columns={"purchase_order_id"}), @ORM\Index(name="fk_purchase_order_details_invt_item1_idx", columns={"id_item"})})
 * @ORM\Entity
 */
class PurchaseOrderDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="unit_price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $unitPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $qty;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted_at", type="string", length=45, nullable=true)
     */
    private $deletedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="qty_on_hand", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $qtyOnHand;

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
     *   @ORM\JoinColumn(name="id_item", referencedColumnName="id")
     * })
     */
    private $idItem;

    /**
     * @var \AppBundle\Entity\PurchaseOrder
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PurchaseOrder",inversedBy="purchaseOrderDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_order_id", referencedColumnName="id")
     * })
     */
    private $purchaseOrder;



    /**
     * Set unitPrice
     *
     * @param string $unitPrice
     *
     * @return PurchaseOrderDetails
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set qty
     *
     * @param string $qty
     *
     * @return PurchaseOrderDetails
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
     * @param string $deletedAt
     *
     * @return PurchaseOrderDetails
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set qtyOnHand
     *
     * @param string $qtyOnHand
     *
     * @return PurchaseOrderDetails
     */
    public function setQtyOnHand($qtyOnHand)
    {
        $this->qtyOnHand = $qtyOnHand;

        return $this;
    }

    /**
     * Get qtyOnHand
     *
     * @return string
     */
    public function getQtyOnHand()
    {
        return $this->qtyOnHand;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return PurchaseOrderDetails
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
     * Set idItem
     *
     * @param \AppBundle\Entity\InvtItem $idItem
     *
     * @return PurchaseOrderDetails
     */
    public function setIdItem(\AppBundle\Entity\InvtItem $idItem = null)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return \AppBundle\Entity\InvtItem
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set purchaseOrder
     *
     * @param \AppBundle\Entity\PurchaseOrder $purchaseOrder
     *
     * @return PurchaseOrderDetails
     */
    public function setPurchaseOrder(\AppBundle\Entity\PurchaseOrder $purchaseOrder = null)
    {
        $this->purchaseOrder = $purchaseOrder;

        return $this;
    }

    /**
     * Get purchaseOrder
     *
     * @return \AppBundle\Entity\PurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->purchaseOrder;
    }
}
