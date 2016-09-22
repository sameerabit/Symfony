<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtCounts
 *
 * @ORM\Table(name="invt_counts", indexes={@ORM\Index(name="fk_invt_counts_invt_warehouses1_idx", columns={"invt_warehouses_id"})})
 * @ORM\Entity
 */
class InvtCounts
{
    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=100, nullable=true)
     */
    private $desc;

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
     *   @ORM\JoinColumn(name="invt_warehouses_id", referencedColumnName="id")
     * })
     */
    private $invtWarehouses;



    /**
     * Set desc
     *
     * @param string $desc
     *
     * @return InvtCounts
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invtWarehouses
     *
     * @param \AppBundle\Entity\InvtWarehouses $invtWarehouses
     *
     * @return InvtCounts
     */
    public function setInvtWarehouses(\AppBundle\Entity\InvtWarehouses $invtWarehouses = null)
    {
        $this->invtWarehouses = $invtWarehouses;

        return $this;
    }

    /**
     * Get invtWarehouses
     *
     * @return \AppBundle\Entity\InvtWarehouses
     */
    public function getInvtWarehouses()
    {
        return $this->invtWarehouses;
    }
}
