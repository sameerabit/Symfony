<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PumpSale
 *
 * @ORM\Table(name="pump_sale", indexes={@ORM\Index(name="fk_pump_sale_pump1_idx", columns={"pump_id"}), @ORM\Index(name="fk_pump_sale_sale_detail1_idx", columns={"sale_detail_id"})})
 * @ORM\Entity
 */
class PumpSale
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Pump
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pump")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pump_id", referencedColumnName="id")
     * })
     */
    private $pump;

    /**
     * @var \AppBundle\Entity\SaleDetail
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\SaleDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sale_detail_id", referencedColumnName="id")
     * })
     */
    private $saleDetail;



    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return PumpSale
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
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
     * Set pump
     *
     * @param \AppBundle\Entity\Pump $pump
     *
     * @return PumpSale
     */
    public function setPump(\AppBundle\Entity\Pump $pump = null)
    {
        $this->pump = $pump;

        return $this;
    }

    /**
     * Get pump
     *
     * @return \AppBundle\Entity\Pump
     */
    public function getPump()
    {
        return $this->pump;
    }

    /**
     * Set saleDetail
     *
     * @param \AppBundle\Entity\SaleDetail $saleDetail
     *
     * @return PumpSale
     */
    public function setSaleDetail(\AppBundle\Entity\SaleDetail $saleDetail = null)
    {
        $this->saleDetail = $saleDetail;

        return $this;
    }

    /**
     * Get saleDetail
     *
     * @return \AppBundle\Entity\SaleDetail
     */
    public function getSaleDetail()
    {
        return $this->saleDetail;
    }
}
