<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvtProductLineGlCodes
 *
 * @ORM\Table(name="invt_product_line_gl_codes", indexes={@ORM\Index(name="fk_invt_product_line_has_gl_normal__accounts_gl_normal__acc_idx", columns={"gl_normal_account"}), @ORM\Index(name="fk_invt_product_line_has_gl_normal__accounts_invt_product_l_idx", columns={"product_line"}), @ORM\Index(name="fk_invt_product_line_gl_codes_invt_product_line_gl_config1_idx", columns={"product_line_gl_config_id"})})
 * @ORM\Entity
 */
class InvtProductLineGlCodes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\InvtProductLineGlConfig
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtProductLineGlConfig")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_line_gl_config_id", referencedColumnName="id")
     * })
     */
    private $productLineGlConfig;

    /**
     * @var \AppBundle\Entity\InvtGlNormalAccounts
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtGlNormalAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gl_normal_account", referencedColumnName="id")
     * })
     */
    private $glNormalAccount;

    /**
     * @var \AppBundle\Entity\InvtProductLine
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\InvtProductLine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_line", referencedColumnName="id")
     * })
     */
    private $productLine;



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
     * Set productLineGlConfig
     *
     * @param \AppBundle\Entity\InvtProductLineGlConfig $productLineGlConfig
     *
     * @return InvtProductLineGlCodes
     */
    public function setProductLineGlConfig(\AppBundle\Entity\InvtProductLineGlConfig $productLineGlConfig = null)
    {
        $this->productLineGlConfig = $productLineGlConfig;

        return $this;
    }

    /**
     * Get productLineGlConfig
     *
     * @return \AppBundle\Entity\InvtProductLineGlConfig
     */
    public function getProductLineGlConfig()
    {
        return $this->productLineGlConfig;
    }

    /**
     * Set glNormalAccount
     *
     * @param \AppBundle\Entity\InvtGlNormalAccounts $glNormalAccount
     *
     * @return InvtProductLineGlCodes
     */
    public function setGlNormalAccount(\AppBundle\Entity\InvtGlNormalAccounts $glNormalAccount = null)
    {
        $this->glNormalAccount = $glNormalAccount;

        return $this;
    }

    /**
     * Get glNormalAccount
     *
     * @return \AppBundle\Entity\InvtGlNormalAccounts
     */
    public function getGlNormalAccount()
    {
        return $this->glNormalAccount;
    }

    /**
     * Set productLine
     *
     * @param \AppBundle\Entity\InvtProductLine $productLine
     *
     * @return InvtProductLineGlCodes
     */
    public function setProductLine(\AppBundle\Entity\InvtProductLine $productLine = null)
    {
        $this->productLine = $productLine;

        return $this;
    }

    /**
     * Get productLine
     *
     * @return \AppBundle\Entity\InvtProductLine
     */
    public function getProductLine()
    {
        return $this->productLine;
    }
}
