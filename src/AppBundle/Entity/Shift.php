<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shift
 *
 * @ORM\Table(name="shift", indexes={@ORM\Index(name="fk_shift_pumper1_idx", columns={"pumper_id"})})
 * @ORM\Entity
 */
class Shift
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commence_time", type="datetime", nullable=true)
     */
    private $commenceTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="amount_given", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $amountGiven = '0.00';

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
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Pumper
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pumper")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pumper_id", referencedColumnName="id")
     * })
     */
    private $pumper;



    /**
     * Set commenceTime
     *
     * @param \DateTime $commenceTime
     *
     * @return Shift
     */
    public function setCommenceTime($commenceTime)
    {
        $this->commenceTime = $commenceTime;

        return $this;
    }

    /**
     * Get commenceTime
     *
     * @return \DateTime
     */
    public function getCommenceTime()
    {
        return $this->commenceTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     *
     * @return Shift
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set amountGiven
     *
     * @param string $amountGiven
     *
     * @return Shift
     */
    public function setAmountGiven($amountGiven)
    {
        $this->amountGiven = $amountGiven;

        return $this;
    }

    /**
     * Get amountGiven
     *
     * @return string
     */
    public function getAmountGiven()
    {
        return $this->amountGiven;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Shift
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
     * @return Shift
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
     * @param \DateTime $deletedAt
     *
     * @return Shift
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
     * Set status
     *
     * @param string $status
     *
     * @return Shift
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set pumper
     *
     * @param \AppBundle\Entity\Pumper $pumper
     *
     * @return Shift
     */
    public function setPumper(\AppBundle\Entity\Pumper $pumper = null)
    {
        $this->pumper = $pumper;

        return $this;
    }

    /**
     * Get pumper
     *
     * @return \AppBundle\Entity\Pumper
     */
    public function getPumper()
    {
        return $this->pumper;
    }
}
