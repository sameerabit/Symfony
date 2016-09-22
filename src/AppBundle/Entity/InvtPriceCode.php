<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtPriceCode
 *
 * @ORM\Table(name="invt_price_code")
 * @ORM\Entity
 */
class InvtPriceCode
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=200, nullable=false)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="pricing_method", type="string", nullable=false)
     */
    private $pricingMethod;

    /**
     * @var integer
     *
     * @ORM\Column(name="price_level", type="integer", nullable=true)
     */
    private $priceLevel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedat;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set code
     *
     * @param string $code
     *
     * @return InvtPriceCode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return InvtPriceCode
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set pricingMethod
     *
     * @param string $pricingMethod
     *
     * @return InvtPriceCode
     */
    public function setPricingMethod($pricingMethod)
    {
        $this->pricingMethod = $pricingMethod;

        return $this;
    }

    /**
     * Get pricingMethod
     *
     * @return string
     */
    public function getPricingMethod()
    {
        return $this->pricingMethod;
    }

    /**
     * Set priceLevel
     *
     * @param integer $priceLevel
     *
     * @return InvtPriceCode
     */
    public function setPriceLevel($priceLevel)
    {
        $this->priceLevel = $priceLevel;

        return $this;
    }

    /**
     * Get priceLevel
     *
     * @return integer
     */
    public function getPriceLevel()
    {
        return $this->priceLevel;
    }

    /**
     * Set deletedat
     *
     * @param \DateTime $deletedat
     *
     * @return InvtPriceCode
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
