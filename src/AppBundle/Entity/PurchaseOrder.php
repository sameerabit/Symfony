<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * PurchaseOrder
 *
 * @ORM\Table(name="purchase_order", indexes={@ORM\Index(name="fk_purchase_order_supplier1_idx", columns={"supplier_id"})})
 * @ORM\Entity
 */
class PurchaseOrder
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="place_at", type="time", nullable=true)
     */
    private $placeAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status=true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_grn", type="boolean", nullable=false)
     */
    private $isGrn=false;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Supplier
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Supplier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supplier_id", referencedColumnName="id")
     * })
     */
    private $supplier;

    /**
     * @var PurchaseOrderDetails
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\PurchaseOrderDetails", mappedBy="purchaseOrder",cascade={"persist"})
     */
    private $purchaseOrderDetails;


    public function __construct()
    {
        $this->purchaseOrderDetails = new ArrayCollection();
    }

    /**
     * Set placeAt
     *
     * @param \DateTime $placeAt
     *
     * @return PurchaseOrder
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return PurchaseOrder
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return PurchaseOrder
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return PurchaseOrder
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
     * Set status
     *
     * @param boolean $status
     *
     * @return PurchaseOrder
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
     * Set isGrn
     *
     * @param boolean $isGrn
     *
     * @return PurchaseOrder
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return PurchaseOrder
     */
    public function setSupplier(\AppBundle\Entity\Supplier $supplier = null)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return \AppBundle\Entity\Supplier
     */
    public function getSupplier()
    {
        return $this->supplier;
    }


    public function addPurchaseOrderDetail(PurchaseOrderDetails $purchaseOrderDetails)
    {
        $this->purchaseOrderDetails->add($purchaseOrderDetails);
    }

    public function removeTag(PurchaseOrderDetails $purchaseOrderDetails)
    {
        // ...
    }

    /**
     * @return PurchaseOrderDetails
     */
    public function getPurchaseOrderDetails()
    {
        return $this->purchaseOrderDetails;
    }

    /**
     * @param PurchaseOrderDetails $purchaseOrderDetails
     */
    public function setPurchaseOrderDetails($purchaseOrderDetails)
    {
        $this->purchaseOrderDetails = $purchaseOrderDetails;
    }
}
