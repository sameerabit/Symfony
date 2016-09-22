<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pump
 *
 * @ORM\Table(name="pump", indexes={@ORM\Index(name="fk_pump_invt_item1_idx", columns={"id_item"})})
 * @ORM\Entity
 */
class Pump
{
    /**
     * @var string
     *
     * @ORM\Column(name="serial_no", type="string", length=45, nullable=true)
     */
    private $serialNo;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="meter_type", type="string", nullable=true)
     */
    private $meterType;

    /**
     * @var float
     *
     * @ORM\Column(name="reset_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $resetValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

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
     * @var \AppBundle\Entity\InvtItem
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_item", referencedColumnName="id")
     * })
     */
    private $idItem;



    /**
     * Set serialNo
     *
     * @param string $serialNo
     *
     * @return Pump
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;

        return $this;
    }

    /**
     * Get serialNo
     *
     * @return string
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Pump
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set meterType
     *
     * @param string $meterType
     *
     * @return Pump
     */
    public function setMeterType($meterType)
    {
        $this->meterType = $meterType;

        return $this;
    }

    /**
     * Get meterType
     *
     * @return string
     */
    public function getMeterType()
    {
        return $this->meterType;
    }

    /**
     * Set resetValue
     *
     * @param float $resetValue
     *
     * @return Pump
     */
    public function setResetValue($resetValue)
    {
        $this->resetValue = $resetValue;

        return $this;
    }

    /**
     * Get resetValue
     *
     * @return float
     */
    public function getResetValue()
    {
        return $this->resetValue;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Pump
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Pump
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Pump
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Pump
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
     * Set idItem
     *
     * @param \AppBundle\Entity\InvtItem $idItem
     *
     * @return Pump
     */
    public function setIdItem(\AppBundle\Entity\InvtItem $idItem = null)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return \AppBundle\Entity\InvtItem
     */
    public function getIdItem()
    {
        return $this->idItem;
    }
}
