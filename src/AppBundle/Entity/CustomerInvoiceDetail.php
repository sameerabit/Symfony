<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerInvoiceDetail
 *
 * @ORM\Table(name="customer_invoice_detail", indexes={@ORM\Index(name="fk_customer_invoice_detail_invt_item1_idx", columns={"item_id"}), @ORM\Index(name="chit_sale_id", columns={"chit_sale_id"})})
 * @ORM\Entity
 */
class CustomerInvoiceDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="invoice_id", type="integer", nullable=false)
     */
    private $invoiceId;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="string", length=45, nullable=true)
     */
    private $qty;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=45, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\ChitSale
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ChitSale")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chit_sale_id", referencedColumnName="id")
     * })
     */
    private $chitSale;

    /**
     * @var \AppBundle\Entity\InvtItem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;



    /**
     * Set invoiceId
     *
     * @param integer $invoiceId
     *
     * @return CustomerInvoiceDetail
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * Get invoiceId
     *
     * @return integer
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set qty
     *
     * @param string $qty
     *
     * @return CustomerInvoiceDetail
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
     * @return CustomerInvoiceDetail
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
     * Set type
     *
     * @param string $type
     *
     * @return CustomerInvoiceDetail
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set chitSale
     *
     * @param \AppBundle\Entity\ChitSale $chitSale
     *
     * @return CustomerInvoiceDetail
     */
    public function setChitSale(\AppBundle\Entity\ChitSale $chitSale = null)
    {
        $this->chitSale = $chitSale;

        return $this;
    }

    /**
     * Get chitSale
     *
     * @return \AppBundle\Entity\ChitSale
     */
    public function getChitSale()
    {
        return $this->chitSale;
    }

    /**
     * Set item
     *
     * @param \AppBundle\Entity\InvtItem $item
     *
     * @return CustomerInvoiceDetail
     */
    public function setItem(\AppBundle\Entity\InvtItem $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \AppBundle\Entity\InvtItem
     */
    public function getItem()
    {
        return $this->item;
    }
}
