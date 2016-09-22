<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReceiptSpecific
 *
 * @ORM\Table(name="receipt_specific", indexes={@ORM\Index(name="fk_receipt_specific_invt_transaction_entry_detail1_idx", columns={"entry_detail_id"}), @ORM\Index(name="fk_receipt_specific_invt_item1_idx", columns={"item_id"})})
 * @ORM\Entity
 */
class ReceiptSpecific
{
    /**
     * @var string
     *
     * @ORM\Column(name="cost", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expire_date", type="date", nullable=true)
     */
    private $expireDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtTransactionEntryDetail
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtTransactionEntryDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entry_detail_id", referencedColumnName="id")
     * })
     */
    private $entryDetail;



    /**
     * Set cost
     *
     * @param string $cost
     *
     * @return ReceiptSpecific
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set itemId
     *
     * @param integer $itemId
     *
     * @return ReceiptSpecific
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     *
     * @return ReceiptSpecific
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set entryDetail
     *
     * @param \AppBundle\Entity\InvtTransactionEntryDetail $entryDetail
     *
     * @return ReceiptSpecific
     */
    public function setEntryDetail(\AppBundle\Entity\InvtTransactionEntryDetail $entryDetail = null)
    {
        $this->entryDetail = $entryDetail;

        return $this;
    }

    /**
     * Get entryDetail
     *
     * @return \AppBundle\Entity\InvtTransactionEntryDetail
     */
    public function getEntryDetail()
    {
        return $this->entryDetail;
    }
}
