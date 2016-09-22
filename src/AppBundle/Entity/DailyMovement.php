<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DailyMovement
 *
 * @ORM\Table(name="daily_movement", indexes={@ORM\Index(name="fk_daily_movement_1_idx", columns={"item_id"})})
 * @ORM\Entity
 */
class DailyMovement
{
    /**
     * @var string
     *
     * @ORM\Column(name="sale", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sale;

    /**
     * @var string
     *
     * @ORM\Column(name="purchase", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $purchase;

    /**
     * @var string
     *
     * @ORM\Column(name="adjustment", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $adjustment;

    /**
     * @var string
     *
     * @ORM\Column(name="return_sale", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $returnSale;

    /**
     * @var string
     *
     * @ORM\Column(name="return_purchase", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $returnPurchase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date;

    /**
     * @var \AppBundle\Entity\InvtItem
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\InvtItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     * })
     */
    private $item;



    /**
     * Set sale
     *
     * @param string $sale
     *
     * @return DailyMovement
     */
    public function setSale($sale)
    {
        $this->sale = $sale;

        return $this;
    }

    /**
     * Get sale
     *
     * @return string
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Set purchase
     *
     * @param string $purchase
     *
     * @return DailyMovement
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * Get purchase
     *
     * @return string
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * Set adjustment
     *
     * @param string $adjustment
     *
     * @return DailyMovement
     */
    public function setAdjustment($adjustment)
    {
        $this->adjustment = $adjustment;

        return $this;
    }

    /**
     * Get adjustment
     *
     * @return string
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    /**
     * Set returnSale
     *
     * @param string $returnSale
     *
     * @return DailyMovement
     */
    public function setReturnSale($returnSale)
    {
        $this->returnSale = $returnSale;

        return $this;
    }

    /**
     * Get returnSale
     *
     * @return string
     */
    public function getReturnSale()
    {
        return $this->returnSale;
    }

    /**
     * Set returnPurchase
     *
     * @param string $returnPurchase
     *
     * @return DailyMovement
     */
    public function setReturnPurchase($returnPurchase)
    {
        $this->returnPurchase = $returnPurchase;

        return $this;
    }

    /**
     * Get returnPurchase
     *
     * @return string
     */
    public function getReturnPurchase()
    {
        return $this->returnPurchase;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DailyMovement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set item
     *
     * @param \AppBundle\Entity\InvtItem $item
     *
     * @return DailyMovement
     */
    public function setItem(\AppBundle\Entity\InvtItem $item)
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
