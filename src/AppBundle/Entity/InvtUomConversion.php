<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtUomConversion
 *
 * @ORM\Table(name="invt_uom_conversion", indexes={@ORM\Index(name="fk_invt_uom_conversion_invt_uom1_idx", columns={"uom_id"}), @ORM\Index(name="fk_invt_uom_conversion_1_idx", columns={"lower_uom_id"})})
 * @ORM\Entity
 */
class InvtUomConversion
{
    /**
     * @var float
     *
     * @ORM\Column(name="factor", type="float", precision=10, scale=0, nullable=false)
     */
    private $factor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtUom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lower_uom_id", referencedColumnName="id")
     * })
     */
    private $lowerUom;

    /**
     * @var \AppBundle\Entity\InvtUom
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtUom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uom_id", referencedColumnName="id")
     * })
     */
    private $uom;



    /**
     * Set factor
     *
     * @param float $factor
     *
     * @return InvtUomConversion
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;

        return $this;
    }

    /**
     * Get factor
     *
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
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
     * Set lowerUom
     *
     * @param \AppBundle\Entity\InvtUom $lowerUom
     *
     * @return InvtUomConversion
     */
    public function setLowerUom(\AppBundle\Entity\InvtUom $lowerUom = null)
    {
        $this->lowerUom = $lowerUom;

        return $this;
    }

    /**
     * Get lowerUom
     *
     * @return \AppBundle\Entity\InvtUom
     */
    public function getLowerUom()
    {
        return $this->lowerUom;
    }

    /**
     * Set uom
     *
     * @param \AppBundle\Entity\InvtUom $uom
     *
     * @return InvtUomConversion
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
