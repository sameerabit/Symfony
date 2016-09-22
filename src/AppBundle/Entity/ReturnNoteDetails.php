<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnNoteDetails
 *
 * @ORM\Table(name="return_note_details", indexes={@ORM\Index(name="fk_return_note_details_return_note1_idx", columns={"return_note_id"}), @ORM\Index(name="fk_return_note_details_invt_item1_idx", columns={"invt_item_id"})})
 * @ORM\Entity
 */
class ReturnNoteDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $qty;

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
     *   @ORM\JoinColumn(name="invt_item_id", referencedColumnName="id")
     * })
     */
    private $invtItem;

    /**
     * @var \AppBundle\Entity\ReturnNote
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ReturnNote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="return_note_id", referencedColumnName="id")
     * })
     */
    private $returnNote;



    /**
     * Set qty
     *
     * @param string $qty
     *
     * @return ReturnNoteDetails
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
     * Set price
     *
     * @param string $price
     *
     * @return ReturnNoteDetails
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
     * Set invtItem
     *
     * @param \AppBundle\Entity\InvtItem $invtItem
     *
     * @return ReturnNoteDetails
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

    /**
     * Set returnNote
     *
     * @param \AppBundle\Entity\ReturnNote $returnNote
     *
     * @return ReturnNoteDetails
     */
    public function setReturnNote(\AppBundle\Entity\ReturnNote $returnNote = null)
    {
        $this->returnNote = $returnNote;

        return $this;
    }

    /**
     * Get returnNote
     *
     * @return \AppBundle\Entity\ReturnNote
     */
    public function getReturnNote()
    {
        return $this->returnNote;
    }
}
