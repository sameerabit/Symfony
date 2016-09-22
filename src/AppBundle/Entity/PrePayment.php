<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePayment
 *
 * @ORM\Table(name="pre_payment", indexes={@ORM\Index(name="company_id", columns={"company_id", "payment_id"}), @ORM\Index(name="payment_id", columns={"payment_id"}), @ORM\Index(name="IDX_DAFC848979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class PrePayment
{
    /**
     * @var string
     *
     * @ORM\Column(name="remain_amount", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $remainAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Company
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     * })
     */
    private $company;

    /**
     * @var \AppBundle\Entity\Payment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Payment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;



    /**
     * Set remainAmount
     *
     * @param string $remainAmount
     *
     * @return PrePayment
     */
    public function setRemainAmount($remainAmount)
    {
        $this->remainAmount = $remainAmount;

        return $this;
    }

    /**
     * Get remainAmount
     *
     * @return string
     */
    public function getRemainAmount()
    {
        return $this->remainAmount;
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
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return PrePayment
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set payment
     *
     * @param \AppBundle\Entity\Payment $payment
     *
     * @return PrePayment
     */
    public function setPayment(\AppBundle\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \AppBundle\Entity\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }
}
