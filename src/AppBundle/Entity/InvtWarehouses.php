<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtWarehouses
 *
 * @ORM\Table(name="invt_warehouses", uniqueConstraints={@ORM\UniqueConstraint(name="warehousescol_UNIQUE", columns={"code"}), @ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"}), @ORM\UniqueConstraint(name="desc_UNIQUE", columns={"desc"})}, indexes={@ORM\Index(name="fk_warehouses_warehouses_idx", columns={"default_warehouse"})})
 * @ORM\Entity
 */
class InvtWarehouses
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=200, nullable=true)
     */
    private $desc;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=20, nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=10, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="post_to_location", type="string", length=45, nullable=true)
     */
    private $postToLocation;

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
     * @var \AppBundle\Entity\InvtWarehouses
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtWarehouses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="default_warehouse", referencedColumnName="id")
     * })
     */
    private $defaultWarehouse;



    /**
     * Set code
     *
     * @param string $code
     *
     * @return InvtWarehouses
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
     * Set name
     *
     * @param string $name
     *
     * @return InvtWarehouses
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
     * Set desc
     *
     * @param string $desc
     *
     * @return InvtWarehouses
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
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return InvtWarehouses
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return InvtWarehouses
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return InvtWarehouses
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postToLocation
     *
     * @param string $postToLocation
     *
     * @return InvtWarehouses
     */
    public function setPostToLocation($postToLocation)
    {
        $this->postToLocation = $postToLocation;

        return $this;
    }

    /**
     * Get postToLocation
     *
     * @return string
     */
    public function getPostToLocation()
    {
        return $this->postToLocation;
    }

    /**
     * Set deletedat
     *
     * @param \DateTime $deletedat
     *
     * @return InvtWarehouses
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
     * Set defaultWarehouse
     *
     * @param \AppBundle\Entity\InvtWarehouses $defaultWarehouse
     *
     * @return InvtWarehouses
     */
    public function setDefaultWarehouse(\AppBundle\Entity\InvtWarehouses $defaultWarehouse = null)
    {
        $this->defaultWarehouse = $defaultWarehouse;

        return $this;
    }

    /**
     * Get defaultWarehouse
     *
     * @return \AppBundle\Entity\InvtWarehouses
     */
    public function getDefaultWarehouse()
    {
        return $this->defaultWarehouse;
    }
}
