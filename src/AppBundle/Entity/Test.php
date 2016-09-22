<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test", indexes={@ORM\Index(name="fk_test_pump1_idx", columns={"pump_id"})})
 * @ORM\Entity
 */
class Test
{
    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="string", length=45, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="test_date", type="datetime", nullable=true)
     */
    private $testDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="deleted_at", type="string", length=45, nullable=true)
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
     * Set amount
     *
     * @param string $amount
     *
     * @return Test
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set testDate
     *
     * @param \DateTime $testDate
     *
     * @return Test
     */
    public function setTestDate($testDate)
    {
        $this->testDate = $testDate;

        return $this;
    }

    /**
     * Get testDate
     *
     * @return \DateTime
     */
    public function getTestDate()
    {
        return $this->testDate;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Test
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Test
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
     * Set deletedAt
     *
     * @param string $deletedAt
     *
     * @return Test
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return string
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
     * @return Test
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
}
