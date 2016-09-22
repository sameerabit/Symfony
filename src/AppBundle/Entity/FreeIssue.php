<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FreeIssue
 *
 * @ORM\Table(name="free_issue")
 * @ORM\Entity
 */
class FreeIssue
{
    /**
     * @var float
     *
     * @ORM\Column(name="factor", type="float", precision=10, scale=0, nullable=true)
     */
    private $factor;

    /**
     * @var float
     *
     * @ORM\Column(name="limit", type="float", precision=10, scale=0, nullable=true)
     */
    private $limit;

    /**
     * @var integer
     *
     * @ORM\Column(name="invt_item_id", type="integer", nullable=false)
     */
    private $invtItemId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set factor
     *
     * @param float $factor
     *
     * @return FreeIssue
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
     * Set limit
     *
     * @param float $limit
     *
     * @return FreeIssue
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get limit
     *
     * @return float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set invtItemId
     *
     * @param integer $invtItemId
     *
     * @return FreeIssue
     */
    public function setInvtItemId($invtItemId)
    {
        $this->invtItemId = $invtItemId;

        return $this;
    }

    /**
     * Get invtItemId
     *
     * @return integer
     */
    public function getInvtItemId()
    {
        return $this->invtItemId;
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
