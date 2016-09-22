<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtTransactionEntry
 *
 * @ORM\Table(name="invt_transaction_entry", indexes={@ORM\Index(name="fk_invt_transaction_entry_1_idx", columns={"wharehouse_id"})})
 * @ORM\Entity
 */
class InvtTransactionEntry
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=45, nullable=true)
     */
    private $desc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtWarehouses
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtWarehouses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="wharehouse_id", referencedColumnName="id")
     * })
     */
    private $wharehouse;



    /**
     * Set type
     *
     * @param string $type
     *
     * @return InvtTransactionEntry
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
     * Set code
     *
     * @param string $code
     *
     * @return InvtTransactionEntry
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
     * Set desc
     *
     * @param string $desc
     *
     * @return InvtTransactionEntry
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set deletedat
     *
     * @param \DateTime $deletedat
     *
     * @return InvtTransactionEntry
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return InvtTransactionEntry
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set wharehouse
     *
     * @param \AppBundle\Entity\InvtWarehouses $wharehouse
     *
     * @return InvtTransactionEntry
     */
    public function setWharehouse(\AppBundle\Entity\InvtWarehouses $wharehouse = null)
    {
        $this->wharehouse = $wharehouse;

        return $this;
    }

    /**
     * Get wharehouse
     *
     * @return \AppBundle\Entity\InvtWarehouses
     */
    public function getWharehouse()
    {
        return $this->wharehouse;
    }
}
