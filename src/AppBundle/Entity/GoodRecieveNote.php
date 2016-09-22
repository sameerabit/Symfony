<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GoodRecieveNote
 *
 * @ORM\Table(name="good_recieve_note", indexes={@ORM\Index(name="fk_good_recieve_note_purchase_order1_idx", columns={"purchase_order_id"})})
 * @ORM\Entity
 */
class GoodRecieveNote
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="place_at", type="datetime", nullable=true)
     */
    private $placeAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="supplier_inv_no", type="string", length=45, nullable=true)
     */
    private $supplierInvNo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_grn", type="boolean", nullable=false)
     */
    private $isGrn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_invoiced", type="boolean", nullable=false)
     */
    private $isInvoiced = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PurchaseOrder
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PurchaseOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="purchase_order_id", referencedColumnName="id")
     * })
     */
    private $purchaseOrder;



    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return GoodRecieveNote
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return GoodRecieveNote
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return GoodRecieveNote
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set placeAt
     *
     * @param \DateTime $placeAt
     *
     * @return GoodRecieveNote
     */
    public function setPlaceAt($placeAt)
    {
        $this->placeAt = $placeAt;

        return $this;
    }

    /**
     * Get placeAt
     *
     * @return \DateTime
     */
    public function getPlaceAt()
    {
        return $this->placeAt;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return GoodRecieveNote
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set supplierInvNo
     *
     * @param string $supplierInvNo
     *
     * @return GoodRecieveNote
     */
    public function setSupplierInvNo($supplierInvNo)
    {
        $this->supplierInvNo = $supplierInvNo;

        return $this;
    }

    /**
     * Get supplierInvNo
     *
     * @return string
     */
    public function getSupplierInvNo()
    {
        return $this->supplierInvNo;
    }

    /**
     * Set isGrn
     *
     * @param boolean $isGrn
     *
     * @return GoodRecieveNote
     */
    public function setIsGrn($isGrn)
    {
        $this->isGrn = $isGrn;

        return $this;
    }

    /**
     * Get isGrn
     *
     * @return boolean
     */
    public function getIsGrn()
    {
        return $this->isGrn;
    }

    /**
     * Set isInvoiced
     *
     * @param boolean $isInvoiced
     *
     * @return GoodRecieveNote
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set purchaseOrder
     *
     * @param \AppBundle\Entity\PurchaseOrder $purchaseOrder
     *
     * @return GoodRecieveNote
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
