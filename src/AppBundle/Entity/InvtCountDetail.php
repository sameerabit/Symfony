<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtCountDetail
 *
 * @ORM\Table(name="invt_count_detail", indexes={@ORM\Index(name="fk_invt_count_detail_1_idx", columns={"id_count"}), @ORM\Index(name="fk_invt_count_detail_2_idx", columns={"id_batch"})})
 * @ORM\Entity
 */
class InvtCountDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="qty", type="integer", nullable=true)
     */
    private $qty;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtCounts
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtCounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_count", referencedColumnName="id")
     * })
     */
    private $idCount;

    /**
     * @var \AppBundle\Entity\InvtItemBatch
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtItemBatch")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_batch", referencedColumnName="id")
     * })
     */
    private $idBatch;



    /**
     * Set qty
     *
     * @param integer $qty
     *
     * @return InvtCountDetail
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return integer
     */
    public function getQty()
    {
        return $this->qty;
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
     * Set idCount
     *
     * @param \AppBundle\Entity\InvtCounts $idCount
     *
     * @return InvtCountDetail
     */
    public function setIdCount(\AppBundle\Entity\InvtCounts $idCount = null)
    {
        $this->idCount = $idCount;

        return $this;
    }

    /**
     * Get idCount
     *
     * @return \AppBundle\Entity\InvtCounts
     */
    public function getIdCount()
    {
        return $this->idCount;
    }

    /**
     * Set idBatch
     *
     * @param \AppBundle\Entity\InvtItemBatch $idBatch
     *
     * @return InvtCountDetail
     */
    public function setIdBatch(\AppBundle\Entity\InvtItemBatch $idBatch = null)
    {
        $this->idBatch = $idBatch;

        return $this;
    }

    /**
     * Get idBatch
     *
     * @return \AppBundle\Entity\InvtItemBatch
     */
    public function getIdBatch()
    {
        return $this->idBatch;
    }
}
