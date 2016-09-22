<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtTransactionEntryDetail
 *
 * @ORM\Table(name="invt_transaction_entry_detail", indexes={@ORM\Index(name="fk_invt_transaction_entry_detail_invt_uom1_idx", columns={"uom"}), @ORM\Index(name="fk_invt_transaction_entry_detail_1_idx", columns={"id_transaction_entry"}), @ORM\Index(name="fk_invt_transaction_entry_detail_2_idx", columns={"batch_id"})})
 * @ORM\Entity
 */
class InvtTransactionEntryDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="qty", type="integer", nullable=true)
     */
    private $qty;

    /**
     * @var string
     *
     * @ORM\Column(name="extention", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $extention;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedat;

    /**
     * @var float
     *
     * @ORM\Column(name="last_item_cost", type="float", precision=10, scale=2, nullable=true)
     */
    private $lastItemCost;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtTransactionEntry
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtTransactionEntry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_transaction_entry", referencedColumnName="id")
     * })
     */
    private $idTransactionEntry;

    /**
     * @var \AppBundle\Entity\InvtItemBatch
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItemBatch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="batch_id", referencedColumnName="id")
     * })
     */
    private $batch;

    /**
     * @var \AppBundle\Entity\InvtUom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom", referencedColumnName="id")
     * })
     */
    private $uom;



    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return InvtTransactionEntryDetail
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
     * Set extention
     *
     * @param string $extention
     *
     * @return InvtTransactionEntryDetail
     */
    public function setExtention($extention)
    {
        $this->extention = $extention;

        return $this;
    }

    /**
     * Get extention
     *
     * @return string
     */
    public function getExtention()
    {
        return $this->extention;
    }

    /**
     * Set deletedat
     *
     * @param \DateTime $deletedat
     *
     * @return InvtTransactionEntryDetail
     */
    public function setDeletedat($deletedat)
    {
        $this->deletedat = $deletedat;

        return $this;
    }

    /**
     * Get deletedat
     *
     * @return \DateTime
     */
    public function getDeletedat()
    {
        return $this->deletedat;
    }

    /**
     * Set lastItemCost
     *
     * @param float $lastItemCost
     *
     * @return InvtTransactionEntryDetail
     */
    public function setLastItemCost($lastItemCost)
    {
        $this->lastItemCost = $lastItemCost;

        return $this;
    }

    /**
     * Get lastItemCost
     *
     * @return float
     */
    public function getLastItemCost()
    {
        return $this->lastItemCost;
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
     * Set idTransactionEntry
     *
     * @param \AppBundle\Entity\InvtTransactionEntry $idTransactionEntry
     *
     * @return InvtTransactionEntryDetail
     */
    public function setIdTransactionEntry(\AppBundle\Entity\InvtTransactionEntry $idTransactionEntry = null)
    {
        $this->idTransactionEntry = $idTransactionEntry;

        return $this;
    }

    /**
     * Get idTransactionEntry
     *
     * @return \AppBundle\Entity\InvtTransactionEntry
     */
    public function getIdTransactionEntry()
    {
        return $this->idTransactionEntry;
    }

    /**
     * Set batch
     *
     * @param \AppBundle\Entity\InvtItemBatch $batch
     *
     * @return InvtTransactionEntryDetail
     */
    public function setBatch(\AppBundle\Entity\InvtItemBatch $batch = null)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Get batch
     *
     * @return \AppBundle\Entity\InvtItemBatch
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Set uom
     *
     * @param \AppBundle\Entity\InvtUom $uom
     *
     * @return InvtTransactionEntryDetail
     */
    public function setUom(\AppBundle\Entity\InvtUom $uom = null)
    {
        $this->uom = $uom;

        return $this;
    }

    /**
     * Get uom
     *
     * @return \AppBundle\Entity\InvtUom
     */
    public function getUom()
    {
        return $this->uom;
    }
}
