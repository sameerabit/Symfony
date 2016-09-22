<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtTransactionCost
 *
 * @ORM\Table(name="invt_transaction_cost", indexes={@ORM\Index(name="fk_invt_transaction_cost_1_idx", columns={"id_transaction_entry"}), @ORM\Index(name="fk_invt_transaction_cost_2_idx", columns={"id_item"}), @ORM\Index(name="fk_invt_transaction_cost_3_idx", columns={"id_batch"})})
 * @ORM\Entity
 */
class InvtTransactionCost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_item", type="integer", nullable=false)
     */
    private $idItem;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="cost", type="float", precision=10, scale=0, nullable=true)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="qty", type="integer", nullable=true)
     */
    private $qty;

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
     *   @ORM\JoinColumn(name="id_batch", referencedColumnName="id")
     * })
     */
    private $idBatch;



    /**
     * Set idItem
     *
     * @param integer $idItem
     *
     * @return InvtTransactionCost
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
     * Set type
     *
     * @param string $type
     *
     * @return InvtTransactionCost
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set cost
     *
     * @param float $cost
     *
     * @return InvtTransactionCost
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
     * Set qty
     *
     * @param integer $qty
     *
     * @return InvtTransactionCost
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
     * @return InvtTransactionCost
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
     * Set idBatch
     *
     * @param \AppBundle\Entity\InvtItemBatch $idBatch
     *
     * @return InvtTransactionCost
     */
    public function setIdBatch(\AppBundle\Entity\InvtItemBatch $idBatch = null)
    {
        $this->idBatch = $idBatch;

        return $this;
    }

    /**
     * Get idBatch
     *
     * @return \AppBundle\Entity\InvtItemBatch
     */
    public function getIdBatch()
    {
        return $this->idBatch;
    }
}
