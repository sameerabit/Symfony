<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShiftPump
 *
 * @ORM\Table(name="shift_pump", indexes={@ORM\Index(name="fk_shift_pump_shift1_idx", columns={"shift_id"}), @ORM\Index(name="fk_shift_pump_pump1_idx", columns={"pump_id"})})
 * @ORM\Entity
 */
class ShiftPump
{
    /**
     * @var string
     *
     * @ORM\Column(name="shift_on_reading", type="decimal", precision=18, scale=4, nullable=true)
     */
    private $shiftOnReading;

    /**
     * @var string
     *
     * @ORM\Column(name="shift_off_reading", type="decimal", precision=18, scale=4, nullable=true)
     */
    private $shiftOffReading = '0.0000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '1';

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
     * @var \DateTime
     *
     * @ORM\Column(name="commence_time", type="datetime", nullable=false)
     */
    private $commenceTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_time", type="datetime", nullable=false)
     */
    private $endTime;

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
     * @var \AppBundle\Entity\Shift
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Shift")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shift_id", referencedColumnName="id")
     * })
     */
    private $shift;



    /**
     * Set shiftOnReading
     *
     * @param string $shiftOnReading
     *
     * @return ShiftPump
     */
    public function setShiftOnReading($shiftOnReading)
    {
        $this->shiftOnReading = $shiftOnReading;

        return $this;
    }

    /**
     * Get shiftOnReading
     *
     * @return string
     */
    public function getShiftOnReading()
    {
        return $this->shiftOnReading;
    }

    /**
     * Set shiftOffReading
     *
     * @param string $shiftOffReading
     *
     * @return ShiftPump
     */
    public function setShiftOffReading($shiftOffReading)
    {
        $this->shiftOffReading = $shiftOffReading;

        return $this;
    }

    /**
     * Get shiftOffReading
     *
     * @return string
     */
    public function getShiftOffReading()
    {
        return $this->shiftOffReading;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return ShiftPump
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return ShiftPump
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
     * @return ShiftPump
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
     * @return ShiftPump
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
     * Set commenceTime
     *
     * @param \DateTime $commenceTime
     *
     * @return ShiftPump
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
     * @return ShiftPump
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
     * @return ShiftPump
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
     * Set shift
     *
     * @param \AppBundle\Entity\Shift $shift
     *
     * @return ShiftPump
     */
    public function setShift(\AppBundle\Entity\Shift $shift = null)
    {
        $this->shift = $shift;

        return $this;
    }

    /**
     * Get shift
     *
     * @return \AppBundle\Entity\Shift
     */
    public function getShift()
    {
        return $this->shift;
    }
}
