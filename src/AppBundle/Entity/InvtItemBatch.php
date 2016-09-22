<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtItemBatch
 *
 * @ORM\Table(name="invt_item_batch", indexes={@ORM\Index(name="fk_invt_item_batch_1_idx", columns={"id_item"}), @ORM\Index(name="fk_invt_item_batch_2_idx", columns={"id_warehouse"})})
 * @ORM\Entity
 */
class InvtItemBatch
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_item", type="integer", nullable=false)
     */
    private $idItem;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty", type="integer", nullable=false)
     */
    private $qty;

    /**
     * @var float
     *
     * @ORM\Column(name="cost", type="float", precision=10, scale=2, nullable=true)
     */
    private $cost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_date", type="date", nullable=true)
     */
    private $expireDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty_valuation", type="integer", nullable=false)
     */
    private $qtyValuation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="grn_id", type="integer", nullable=true)
     */
    private $grnId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtWarehouses
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtWarehouses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_warehouse", referencedColumnName="id")
     * })
     */
    private $idWarehouse;



    /**
     * Set idItem
     *
     * @param integer $idItem
     *
     * @return InvtItemBatch
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return integer
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return InvtItemBatch
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set cost
     *
     * @param float $cost
     *
     * @return InvtItemBatch
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     *
     * @return InvtItemBatch
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set qtyValuation
     *
     * @param integer $qtyValuation
     *
     * @return InvtItemBatch
     */
    public function setQtyValuation($qtyValuation)
    {
        $this->qtyValuation = $qtyValuation;

        return $this;
    }

    /**
     * Get qtyValuation
     *
     * @return integer
     */
    public function getQtyValuation()
    {
        return $this->qtyValuation;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return InvtItemBatch
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
     * Set grnId
     *
     * @param integer $grnId
     *
     * @return InvtItemBatch
     */
    public function setGrnId($grnId)
    {
        $this->grnId = $grnId;

        return $this;
    }

    /**
     * Get grnId
     *
     * @return integer
     */
    public function getGrnId()
    {
        return $this->grnId;
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
     * Set idWarehouse
     *
     * @param \AppBundle\Entity\InvtWarehouses $idWarehouse
     *
     * @return InvtItemBatch
     */
    public function setIdWarehouse(\AppBundle\Entity\InvtWarehouses $idWarehouse = null)
    {
        $this->idWarehouse = $idWarehouse;

        return $this;
    }

    /**
     * Get idWarehouse
     *
     * @return \AppBundle\Entity\InvtWarehouses
     */
    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }
}
