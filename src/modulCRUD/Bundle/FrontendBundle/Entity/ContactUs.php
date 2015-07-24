<?php

namespace modulCRUD\Bundle\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactUs
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ContactUs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="nohp", type="bigint")
     */
    private $nohp;

    /**
     * @var string
     *
     * @ORM\Column(name="companyName", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="judul", type="string", length=255)
     */
    private $judul;

    /**
     * @var string
     *
     * @ORM\Column(name="isiPesan", type="string", length=255)
     */
    private $isiPesan;


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
     * Set name
     *
     * @param string $name
     * @return ContactUs
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
     * Set email
     *
     * @param string $email
     * @return ContactUs
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nohp
     *
     * @param integer $nohp
     * @return ContactUs
     */
    public function setNohp($nohp)
    {
        $this->nohp = $nohp;

        return $this;
    }

    /**
     * Get nohp
     *
     * @return integer 
     */
    public function getNohp()
    {
        return $this->nohp;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     * @return ContactUs
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set judul
     *
     * @param string $judul
     * @return ContactUs
     */
    public function setJudul($judul)
    {
        $this->judul = $judul;

        return $this;
    }

    /**
     * Get judul
     *
     * @return string 
     */
    public function getJudul()
    {
        return $this->judul;
    }

    /**
     * Set isiPesan
     *
     * @param string $isiPesan
     * @return ContactUs
     */
    public function setIsiPesan($isiPesan)
    {
        $this->isiPesan = $isiPesan;

        return $this;
    }

    /**
     * Get isiPesan
     *
     * @return string 
     */
    public function getIsiPesan()
    {
        return $this->isiPesan;
    }
}
