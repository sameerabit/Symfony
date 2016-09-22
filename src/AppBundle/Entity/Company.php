<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
{
    /**
     * @var float
     *
     * @ORM\Column(name="credit_limit", type="float", precision=10, scale=0, nullable=true)
     */
    private $creditLimit;

    /**
     * @var float
     *
     * @ORM\Column(name="deposit_amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $depositAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_no", type="string", length=100, nullable=true)
     */
    private $regNo;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_no", type="string", length=10, nullable=true)
     */
    private $contactNo;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=450, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set creditLimit
     *
     * @param float $creditLimit
     *
     * @return Company
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }

    /**
     * Get creditLimit
     *
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * Set depositAmount
     *
     * @param float $depositAmount
     *
     * @return Company
     */
    public function setDepositAmount($depositAmount)
    {
        $this->depositAmount = $depositAmount;

        return $this;
    }

    /**
     * Get depositAmount
     *
     * @return float
     */
    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set regNo
     *
     * @param string $regNo
     *
     * @return Company
     */
    public function setRegNo($regNo)
    {
        $this->regNo = $regNo;

        return $this;
    }

    /**
     * Get regNo
     *
     * @return string
     */
    public function getRegNo()
    {
        return $this->regNo;
    }

    /**
     * Set contactNo
     *
     * @param string $contactNo
     *
     * @return Company
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return string
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Company
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
     * Set status
     *
     * @param boolean $status
     *
     * @return Company
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
