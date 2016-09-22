<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtItem
 *
 * @ORM\Table(name="invt_item", indexes={@ORM\Index(name="fk_invt_item_invt_product_line1_idx", columns={"invt_product_line"}), @ORM\Index(name="fk_invt_item_invt_price_code1_idx", columns={"price_code"}), @ORM\Index(name="fk_invt_item_invt_item_cat1_idx", columns={"item_cat_id"}), @ORM\Index(name="uom_standerd", columns={"uom_standerd"}), @ORM\Index(name="uom_sale", columns={"uom_sale"}), @ORM\Index(name="uom_purchase", columns={"uom_purchase"}), @ORM\Index(name="uom_sale_2", columns={"uom_sale"})})
 * @ORM\Entity
 */
class InvtItem
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="valuation", type="string", nullable=false)
     */
    private $valuation = 'FIFO';

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;

    /**
     * @var float
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var float
     *
     * @ORM\Column(name="standerd_price", type="float", precision=10, scale=2, nullable=false)
     */
    private $standerdPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="retail_price", type="float", precision=10, scale=2, nullable=false)
     */
    private $retailPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="product_type", type="string", nullable=false)
     */
    private $productType = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=20, nullable=true)
     */
    private $sku;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedat;

    /**
     * @var integer
     *
     * @ORM\Column(name="reorder_point", type="integer", nullable=true)
     */
    private $reorderPoint;

    /**
     * @var integer
     *
     * @ORM\Column(name="reorder_quantity", type="integer", nullable=true)
     */
    private $reorderQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="cat1", type="string", length=45, nullable=true)
     */
    private $cat1;

    /**
     * @var string
     *
     * @ORM\Column(name="cat2", type="string", length=45, nullable=true)
     */
    private $cat2;

    /**
     * @var string
     *
     * @ORM\Column(name="cat3", type="string", length=45, nullable=true)
     */
    private $cat3;

    /**
     * @var string
     *
     * @ORM\Column(name="cat4", type="string", length=45, nullable=true)
     */
    private $cat4;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtItemCat
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItemCat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_cat_id", referencedColumnName="id")
     * })
     */
    private $itemCat;

    /**
     * @var \AppBundle\Entity\InvtPriceCode
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtPriceCode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="price_code", referencedColumnName="id")
     * })
     */
    private $priceCode;

    /**
     * @var \AppBundle\Entity\InvtProductLine
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtProductLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invt_product_line", referencedColumnName="id")
     * })
     */
    private $invtProductLine;

    /**
     * @var \AppBundle\Entity\InvtUom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_sale", referencedColumnName="id")
     * })
     */
    private $uomSale;

    /**
     * @var \AppBundle\Entity\InvtUom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_standerd", referencedColumnName="id")
     * })
     */
    private $uomStanderd;

    /**
     * @var \AppBundle\Entity\InvtUom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_purchase", referencedColumnName="id")
     * })
     */
    private $uomPurchase;



    /**
     * Set code
     *
     * @param string $code
     *
     * @return InvtItem
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
     * Set description
     *
     * @param string $description
     *
     * @return InvtItem
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set valuation
     *
     * @param string $valuation
     *
     * @return InvtItem
     */
    public function setValuation($valuation)
    {
        $this->valuation = $valuation;

        return $this;
    }

    /**
     * Get valuation
     *
     * @return string
     */
    public function getValuation()
    {
        return $this->valuation;
    }

    /**
     * Set weight
     *
     * @param float $weight
     *
     * @return InvtItem
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set volume
     *
     * @param float $volume
     *
     * @return InvtItem
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set standerdPrice
     *
     * @param float $standerdPrice
     *
     * @return InvtItem
     */
    public function setStanderdPrice($standerdPrice)
    {
        $this->standerdPrice = $standerdPrice;

        return $this;
    }

    /**
     * Get standerdPrice
     *
     * @return float
     */
    public function getStanderdPrice()
    {
        return $this->standerdPrice;
    }

    /**
     * Set retailPrice
     *
     * @param float $retailPrice
     *
     * @return InvtItem
     */
    public function setRetailPrice($retailPrice)
    {
        $this->retailPrice = $retailPrice;

        return $this;
    }

    /**
     * Get retailPrice
     *
     * @return float
     */
    public function getRetailPrice()
    {
        return $this->retailPrice;
    }

    /**
     * Set productType
     *
     * @param string $productType
     *
     * @return InvtItem
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Set sku
     *
     * @param string $sku
     *
     * @return InvtItem
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set deletedat
     *
     * @param \DateTime $deletedat
     *
     * @return InvtItem
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
     * Set reorderPoint
     *
     * @param integer $reorderPoint
     *
     * @return InvtItem
     */
    public function setReorderPoint($reorderPoint)
    {
        $this->reorderPoint = $reorderPoint;

        return $this;
    }

    /**
     * Get reorderPoint
     *
     * @return integer
     */
    public function getReorderPoint()
    {
        return $this->reorderPoint;
    }

    /**
     * Set reorderQuantity
     *
     * @param integer $reorderQuantity
     *
     * @return InvtItem
     */
    public function setReorderQuantity($reorderQuantity)
    {
        $this->reorderQuantity = $reorderQuantity;

        return $this;
    }

    /**
     * Get reorderQuantity
     *
     * @return integer
     */
    public function getReorderQuantity()
    {
        return $this->reorderQuantity;
    }

    /**
     * Set cat1
     *
     * @param string $cat1
     *
     * @return InvtItem
     */
    public function setCat1($cat1)
    {
        $this->cat1 = $cat1;

        return $this;
    }

    /**
     * Get cat1
     *
     * @return string
     */
    public function getCat1()
    {
        return $this->cat1;
    }

    /**
     * Set cat2
     *
     * @param string $cat2
     *
     * @return InvtItem
     */
    public function setCat2($cat2)
    {
        $this->cat2 = $cat2;

        return $this;
    }

    /**
     * Get cat2
     *
     * @return string
     */
    public function getCat2()
    {
        return $this->cat2;
    }

    /**
     * Set cat3
     *
     * @param string $cat3
     *
     * @return InvtItem
     */
    public function setCat3($cat3)
    {
        $this->cat3 = $cat3;

        return $this;
    }

    /**
     * Get cat3
     *
     * @return string
     */
    public function getCat3()
    {
        return $this->cat3;
    }

    /**
     * Set cat4
     *
     * @param string $cat4
     *
     * @return InvtItem
     */
    public function setCat4($cat4)
    {
        $this->cat4 = $cat4;

        return $this;
    }

    /**
     * Get cat4
     *
     * @return string
     */
    public function getCat4()
    {
        return $this->cat4;
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
     * Set itemCat
     *
     * @param \AppBundle\Entity\InvtItemCat $itemCat
     *
     * @return InvtItem
     */
    public function setItemCat(\AppBundle\Entity\InvtItemCat $itemCat = null)
    {
        $this->itemCat = $itemCat;

        return $this;
    }

    /**
     * Get itemCat
     *
     * @return \AppBundle\Entity\InvtItemCat
     */
    public function getItemCat()
    {
        return $this->itemCat;
    }

    /**
     * Set priceCode
     *
     * @param \AppBundle\Entity\InvtPriceCode $priceCode
     *
     * @return InvtItem
     */
    public function setPriceCode(\AppBundle\Entity\InvtPriceCode $priceCode = null)
    {
        $this->priceCode = $priceCode;

        return $this;
    }

    /**
     * Get priceCode
     *
     * @return \AppBundle\Entity\InvtPriceCode
     */
    public function getPriceCode()
    {
        return $this->priceCode;
    }

    /**
     * Set invtProductLine
     *
     * @param \AppBundle\Entity\InvtProductLine $invtProductLine
     *
     * @return InvtItem
     */
    public function setInvtProductLine(\AppBundle\Entity\InvtProductLine $invtProductLine = null)
    {
        $this->invtProductLine = $invtProductLine;

        return $this;
    }

    /**
     * Get invtProductLine
     *
     * @return \AppBundle\Entity\InvtProductLine
     */
    public function getInvtProductLine()
    {
        return $this->invtProductLine;
    }

    /**
     * Set uomSale
     *
     * @param \AppBundle\Entity\InvtUom $uomSale
     *
     * @return InvtItem
     */
    public function setUomSale(\AppBundle\Entity\InvtUom $uomSale = null)
    {
        $this->uomSale = $uomSale;

        return $this;
    }

    /**
     * Get uomSale
     *
     * @return \AppBundle\Entity\InvtUom
     */
    public function getUomSale()
    {
        return $this->uomSale;
    }

    /**
     * Set uomStanderd
     *
     * @param \AppBundle\Entity\InvtUom $uomStanderd
     *
     * @return InvtItem
     */
    public function setUomStanderd(\AppBundle\Entity\InvtUom $uomStanderd = null)
    {
        $this->uomStanderd = $uomStanderd;

        return $this;
    }

    /**
     * Get uomStanderd
     *
     * @return \AppBundle\Entity\InvtUom
     */
    public function getUomStanderd()
    {
        return $this->uomStanderd;
    }

    /**
     * Set uomPurchase
     *
     * @param \AppBundle\Entity\InvtUom $uomPurchase
     *
     * @return InvtItem
     */
    public function setUomPurchase(\AppBundle\Entity\InvtUom $uomPurchase = null)
    {
        $this->uomPurchase = $uomPurchase;

        return $this;
    }

    /**
     * Get uomPurchase
     *
     * @return \AppBundle\Entity\InvtUom
     */
    public function getUomPurchase()
    {
        return $this->uomPurchase;
    }
}
