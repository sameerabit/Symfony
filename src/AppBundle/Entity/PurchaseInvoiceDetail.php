<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseInvoiceDetail
 *
 * @ORM\Table(name="purchase_invoice_detail", indexes={@ORM\Index(name="fk_purchase_invoice_detail_purchase_invoice1_idx", columns={"purchase_invoice_id"}), @ORM\Index(name="fk_purchase_invoice_detail_invt_item1_idx", columns={"id_item"})})
 * @ORM\Entity
 */
class PurchaseInvoiceDetail
{
    /**
     * @var string
     *
     * @ORM\Column(name="ordered_price", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $orderedPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="ordered_qty", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $orderedQty;

    /**
     * @var string
     *
     * @ORM\Column(name="delivered_qty", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $deliveredQty;

    /**
     * @var string
     *
     * @ORM\Column(name="delivered_price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $deliveredPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="qty_on_hand", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $qtyOnHand;

    /**
     * @var string
     *
     * @ORM\Column(name="retail_price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $retailPrice;

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
     * @var \AppBundle\Entity\PurchaseInvoice
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PurchaseInvoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_invoice_id", referencedColumnName="id")
     * })
     */
    private $purchaseInvoice;



    /**
     * Set orderedPrice
     *
     * @param string $orderedPrice
     *
     * @return PurchaseInvoiceDetail
     */
    public function setOrderedPrice($orderedPrice)
    {
        $this->orderedPrice = $orderedPrice;

        return $this;
    }

    /**
     * Get orderedPrice
     *
     * @return string
     */
    public function getOrderedPrice()
    {
        return $this->orderedPrice;
    }

    /**
     * Set orderedQty
     *
     * @param string $orderedQty
     *
     * @return PurchaseInvoiceDetail
     */
    public function setOrderedQty($orderedQty)
    {
        $this->orderedQty = $orderedQty;

        return $this;
    }

    /**
     * Get orderedQty
     *
     * @return string
     */
    public function getOrderedQty()
    {
        return $this->orderedQty;
    }

    /**
     * Set deliveredQty
     *
     * @param string $deliveredQty
     *
     * @return PurchaseInvoiceDetail
     */
    public function setDeliveredQty($deliveredQty)
    {
        $this->deliveredQty = $deliveredQty;

        return $this;
    }

    /**
     * Get deliveredQty
     *
     * @return string
     */
    public function getDeliveredQty()
    {
        return $this->deliveredQty;
    }

    /**
     * Set deliveredPrice
     *
     * @param string $deliveredPrice
     *
     * @return PurchaseInvoiceDetail
     */
    public function setDeliveredPrice($deliveredPrice)
    {
        $this->deliveredPrice = $deliveredPrice;

        return $this;
    }

    /**
     * Get deliveredPrice
     *
     * @return string
     */
    public function getDeliveredPrice()
    {
        return $this->deliveredPrice;
    }

    /**
     * Set qtyOnHand
     *
     * @param string $qtyOnHand
     *
     * @return PurchaseInvoiceDetail
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
     * Set retailPrice
     *
     * @param string $retailPrice
     *
     * @return PurchaseInvoiceDetail
     */
    public function setRetailPrice($retailPrice)
    {
        $this->retailPrice = $retailPrice;

        return $this;
    }

    /**
     * Get retailPrice
     *
     * @return string
     */
    public function getRetailPrice()
    {
        return $this->retailPrice;
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
     * @return PurchaseInvoiceDetail
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
     * Set purchaseInvoice
     *
     * @param \AppBundle\Entity\PurchaseInvoice $purchaseInvoice
     *
     * @return PurchaseInvoiceDetail
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
