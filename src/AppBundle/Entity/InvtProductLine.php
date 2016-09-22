<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtProductLine
 *
 * @ORM\Table(name="invt_product_line", indexes={@ORM\Index(name="fk_product_line_uom1_idx", columns={"uom_standerd"}), @ORM\Index(name="fk_product_line_uom2_idx", columns={"uom_sale"}), @ORM\Index(name="fk_product_line_uom3_idx", columns={"uom_purchase"}), @ORM\Index(name="fk_product_line_price_code1_idx", columns={"price_code"}), @ORM\Index(name="fk_invt_product_line_invt_item_cat1_idx", columns={"item_cat_id"})})
 * @ORM\Entity
 */
class InvtProductLine
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="product_type", type="string", nullable=false)
     */
    private $productType;

    /**
     * @var string
     *
     * @ORM\Column(name="valuation", type="string", nullable=false)
     */
    private $valuation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_back_orders", type="boolean", nullable=false)
     */
    private $allowBackOrders = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_trade_discount", type="boolean", nullable=false)
     */
    private $allowTradeDiscount = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_item_inactive", type="boolean", nullable=false)
     */
    private $isItemInactive = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commision_method", type="string", nullable=true)
     */
    private $commisionMethod = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="commision_rate", type="float", precision=10, scale=3, nullable=true)
     */
    private $commisionRate = '0.000';

    /**
     * @var float
     *
     * @ORM\Column(name="base_commision", type="float", precision=10, scale=3, nullable=true)
     */
    private $baseCommision = '0.000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rog_cot_incres", type="boolean", nullable=true)
     */
    private $rogCotIncres = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="purchase_tax_class", type="integer", nullable=true)
     */
    private $purchaseTaxClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="sales_tax_class", type="integer", nullable=true)
     */
    private $salesTaxClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="warranty_code", type="integer", nullable=true)
     */
    private $warrantyCode;

    /**
     * @var string
     *
     * @ORM\Column(name="product_linecol", type="string", length=45, nullable=true)
     */
    private $productLinecol;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_returns", type="boolean", nullable=true)
     */
    private $allowReturns = '1';

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
     *   @ORM\JoinColumn(name="uom_sale", referencedColumnName="id")
     * })
     */
    private $uomSale;

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
     * Set description
     *
     * @param string $description
     *
     * @return InvtProductLine
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
     * Set productType
     *
     * @param string $productType
     *
     * @return InvtProductLine
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
     * Set valuation
     *
     * @param string $valuation
     *
     * @return InvtProductLine
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
     * Set allowBackOrders
     *
     * @param boolean $allowBackOrders
     *
     * @return InvtProductLine
     */
    public function setAllowBackOrders($allowBackOrders)
    {
        $this->allowBackOrders = $allowBackOrders;

        return $this;
    }

    /**
     * Get allowBackOrders
     *
     * @return boolean
     */
    public function getAllowBackOrders()
    {
        return $this->allowBackOrders;
    }

    /**
     * Set allowTradeDiscount
     *
     * @param boolean $allowTradeDiscount
     *
     * @return InvtProductLine
     */
    public function setAllowTradeDiscount($allowTradeDiscount)
    {
        $this->allowTradeDiscount = $allowTradeDiscount;

        return $this;
    }

    /**
     * Get allowTradeDiscount
     *
     * @return boolean
     */
    public function getAllowTradeDiscount()
    {
        return $this->allowTradeDiscount;
    }

    /**
     * Set isItemInactive
     *
     * @param boolean $isItemInactive
     *
     * @return InvtProductLine
     */
    public function setIsItemInactive($isItemInactive)
    {
        $this->isItemInactive = $isItemInactive;

        return $this;
    }

    /**
     * Get isItemInactive
     *
     * @return boolean
     */
    public function getIsItemInactive()
    {
        return $this->isItemInactive;
    }

    /**
     * Set commisionMethod
     *
     * @param string $commisionMethod
     *
     * @return InvtProductLine
     */
    public function setCommisionMethod($commisionMethod)
    {
        $this->commisionMethod = $commisionMethod;

        return $this;
    }

    /**
     * Get commisionMethod
     *
     * @return string
     */
    public function getCommisionMethod()
    {
        return $this->commisionMethod;
    }

    /**
     * Set commisionRate
     *
     * @param float $commisionRate
     *
     * @return InvtProductLine
     */
    public function setCommisionRate($commisionRate)
    {
        $this->commisionRate = $commisionRate;

        return $this;
    }

    /**
     * Get commisionRate
     *
     * @return float
     */
    public function getCommisionRate()
    {
        return $this->commisionRate;
    }

    /**
     * Set baseCommision
     *
     * @param float $baseCommision
     *
     * @return InvtProductLine
     */
    public function setBaseCommision($baseCommision)
    {
        $this->baseCommision = $baseCommision;

        return $this;
    }

    /**
     * Get baseCommision
     *
     * @return float
     */
    public function getBaseCommision()
    {
        return $this->baseCommision;
    }

    /**
     * Set rogCotIncres
     *
     * @param boolean $rogCotIncres
     *
     * @return InvtProductLine
     */
    public function setRogCotIncres($rogCotIncres)
    {
        $this->rogCotIncres = $rogCotIncres;

        return $this;
    }

    /**
     * Get rogCotIncres
     *
     * @return boolean
     */
    public function getRogCotIncres()
    {
        return $this->rogCotIncres;
    }

    /**
     * Set purchaseTaxClass
     *
     * @param integer $purchaseTaxClass
     *
     * @return InvtProductLine
     */
    public function setPurchaseTaxClass($purchaseTaxClass)
    {
        $this->purchaseTaxClass = $purchaseTaxClass;

        return $this;
    }

    /**
     * Get purchaseTaxClass
     *
     * @return integer
     */
    public function getPurchaseTaxClass()
    {
        return $this->purchaseTaxClass;
    }

    /**
     * Set salesTaxClass
     *
     * @param integer $salesTaxClass
     *
     * @return InvtProductLine
     */
    public function setSalesTaxClass($salesTaxClass)
    {
        $this->salesTaxClass = $salesTaxClass;

        return $this;
    }

    /**
     * Get salesTaxClass
     *
     * @return integer
     */
    public function getSalesTaxClass()
    {
        return $this->salesTaxClass;
    }

    /**
     * Set warrantyCode
     *
     * @param integer $warrantyCode
     *
     * @return InvtProductLine
     */
    public function setWarrantyCode($warrantyCode)
    {
        $this->warrantyCode = $warrantyCode;

        return $this;
    }

    /**
     * Get warrantyCode
     *
     * @return integer
     */
    public function getWarrantyCode()
    {
        return $this->warrantyCode;
    }

    /**
     * Set productLinecol
     *
     * @param string $productLinecol
     *
     * @return InvtProductLine
     */
    public function setProductLinecol($productLinecol)
    {
        $this->productLinecol = $productLinecol;

        return $this;
    }

    /**
     * Get productLinecol
     *
     * @return string
     */
    public function getProductLinecol()
    {
        return $this->productLinecol;
    }

    /**
     * Set allowReturns
     *
     * @param boolean $allowReturns
     *
     * @return InvtProductLine
     */
    public function setAllowReturns($allowReturns)
    {
        $this->allowReturns = $allowReturns;

        return $this;
    }

    /**
     * Get allowReturns
     *
     * @return boolean
     */
    public function getAllowReturns()
    {
        return $this->allowReturns;
    }

    /**
     * Set deletedat
     *
     * @param \DateTime $deletedat
     *
     * @return InvtProductLine
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

    /**
     * Set itemCat
     *
     * @param \AppBundle\Entity\InvtItemCat $itemCat
     *
     * @return InvtProductLine
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
     * @return InvtProductLine
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
     * Set uomStanderd
     *
     * @param \AppBundle\Entity\InvtUom $uomStanderd
     *
     * @return InvtProductLine
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
     * Set uomSale
     *
     * @param \AppBundle\Entity\InvtUom $uomSale
     *
     * @return InvtProductLine
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
     * Set uomPurchase
     *
     * @param \AppBundle\Entity\InvtUom $uomPurchase
     *
     * @return InvtProductLine
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
