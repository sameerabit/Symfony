<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtPriceCodeStep
 *
 * @ORM\Table(name="invt_price_code_step", indexes={@ORM\Index(name="fk_invt_price_code_step_invt_price_code1_idx", columns={"invt_price_code_id"})})
 * @ORM\Entity
 */
class InvtPriceCodeStep
{
    /**
     * @var string
     *
     * @ORM\Column(name="step", type="string", length=45, nullable=true)
     */
    private $step;

    /**
     * @var string
     *
     * @ORM\Column(name="from_qty", type="string", length=45, nullable=true)
     */
    private $fromQty;

    /**
     * @var string
     *
     * @ORM\Column(name="to_qty", type="string", length=45, nullable=true)
     */
    private $toQty;

    /**
     * @var float
     *
     * @ORM\Column(name="markup", type="float", precision=5, scale=3, nullable=true)
     */
    private $markup = '0.000';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type = '1';

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
     * @var \AppBundle\Entity\InvtPriceCode
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtPriceCode")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invt_price_code_id", referencedColumnName="id")
     * })
     */
    private $invtPriceCode;



    /**
     * Set step
     *
     * @param string $step
     *
     * @return InvtPriceCodeStep
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Set fromQty
     *
     * @param string $fromQty
     *
     * @return InvtPriceCodeStep
     */
    public function setFromQty($fromQty)
    {
        $this->fromQty = $fromQty;

        return $this;
    }

    /**
     * Get fromQty
     *
     * @return string
     */
    public function getFromQty()
    {
        return $this->fromQty;
    }

    /**
     * Set toQty
     *
     * @param string $toQty
     *
     * @return InvtPriceCodeStep
     */
    public function setToQty($toQty)
    {
        $this->toQty = $toQty;

        return $this;
    }

    /**
     * Get toQty
     *
     * @return string
     */
    public function getToQty()
    {
        return $this->toQty;
    }

    /**
     * Set markup
     *
     * @param float $markup
     *
     * @return InvtPriceCodeStep
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;

        return $this;
    }

    /**
     * Get markup
     *
     * @return float
     */
    public function getMarkup()
    {
        return $this->markup;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return InvtPriceCodeStep
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
     * Set deletedat
     *
     * @param \DateTime $deletedat
     *
     * @return InvtPriceCodeStep
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
     * Set invtPriceCode
     *
     * @param \AppBundle\Entity\InvtPriceCode $invtPriceCode
     *
     * @return InvtPriceCodeStep
     */
    public function setInvtPriceCode(\AppBundle\Entity\InvtPriceCode $invtPriceCode = null)
    {
        $this->invtPriceCode = $invtPriceCode;

        return $this;
    }

    /**
     * Get invtPriceCode
     *
     * @return \AppBundle\Entity\InvtPriceCode
     */
    public function getInvtPriceCode()
    {
        return $this->invtPriceCode;
    }
}
