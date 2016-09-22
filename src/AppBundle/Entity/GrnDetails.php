<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrnDetails
 *
 * @ORM\Table(name="grn_details", indexes={@ORM\Index(name="fk_grn_details_good_recieve_note1_idx", columns={"good_recieve_note_id"}), @ORM\Index(name="fk_grn_details_invt_item1_idx", columns={"id_item"})})
 * @ORM\Entity
 */
class GrnDetails
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
     * @var \AppBundle\Entity\GoodRecieveNote
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\GoodRecieveNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="good_recieve_note_id", referencedColumnName="id")
     * })
     */
    private $goodRecieveNote;

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
     * Set orderedPrice
     *
     * @param string $orderedPrice
     *
     * @return GrnDetails
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
     * @return GrnDetails
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
     * @return GrnDetails
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
     * @return GrnDetails
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
     * @return GrnDetails
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
     * @return GrnDetails
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
     * Set goodRecieveNote
     *
     * @param \AppBundle\Entity\GoodRecieveNote $goodRecieveNote
     *
     * @return GrnDetails
     */
    public function setGoodRecieveNote(\AppBundle\Entity\GoodRecieveNote $goodRecieveNote = null)
    {
        $this->goodRecieveNote = $goodRecieveNote;

        return $this;
    }

    /**
     * Get goodRecieveNote
     *
     * @return \AppBundle\Entity\GoodRecieveNote
     */
    public function getGoodRecieveNote()
    {
        return $this->goodRecieveNote;
    }

    /**
     * Set idItem
     *
     * @param \AppBundle\Entity\InvtItem $idItem
     *
     * @return GrnDetails
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
}
