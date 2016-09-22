<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cheque
 *
 * @ORM\Table(name="cheque", indexes={@ORM\Index(name="fk_creditor_cheque_bank1_idx", columns={"bank_id"}), @ORM\Index(name="fk_cheque_payment_type1_idx", columns={"payment_detail_id"})})
 * @ORM\Entity
 */
class Cheque
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="realize_date", type="date", nullable=true)
     */
    private $realizeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_acc", type="string", length=45, nullable=true)
     */
    private $bankAcc;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="returnStatus", type="boolean", nullable=true)
     */
    private $returnstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PaymentDetail
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PaymentDetail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_detail_id", referencedColumnName="id")
     * })
     */
    private $paymentDetail;

    /**
     * @var \AppBundle\Entity\Bank
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_id", referencedColumnName="id")
     * })
     */
    private $bank;



    /**
     * Set realizeDate
     *
     * @param \DateTime $realizeDate
     *
     * @return Cheque
     */
    public function setRealizeDate($realizeDate)
    {
        $this->realizeDate = $realizeDate;

        return $this;
    }

    /**
     * Get realizeDate
     *
     * @return \DateTime
     */
    public function getRealizeDate()
    {
        return $this->realizeDate;
    }

    /**
     * Set bankAcc
     *
     * @param string $bankAcc
     *
     * @return Cheque
     */
    public function setBankAcc($bankAcc)
    {
        $this->bankAcc = $bankAcc;

        return $this;
    }

    /**
     * Get bankAcc
     *
     * @return string
     */
    public function getBankAcc()
    {
        return $this->bankAcc;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return Cheque
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Cheque
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
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Cheque
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Cheque
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
     * Set returnstatus
     *
     * @param boolean $returnstatus
     *
     * @return Cheque
     */
    public function setReturnstatus($returnstatus)
    {
        $this->returnstatus = $returnstatus;

        return $this;
    }

    /**
     * Get returnstatus
     *
     * @return boolean
     */
    public function getReturnstatus()
    {
        return $this->returnstatus;
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
     * Set paymentDetail
     *
     * @param \AppBundle\Entity\PaymentDetail $paymentDetail
     *
     * @return Cheque
     */
    public function setPaymentDetail(\AppBundle\Entity\PaymentDetail $paymentDetail = null)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }

    /**
     * Get paymentDetail
     *
     * @return \AppBundle\Entity\PaymentDetail
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Set bank
     *
     * @param \AppBundle\Entity\Bank $bank
     *
     * @return Cheque
     */
    public function setBank(\AppBundle\Entity\Bank $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \AppBundle\Entity\Bank
     */
    public function getBank()
    {
        return $this->bank;
    }
}
