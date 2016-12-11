<?php

namespace Veta\HomeworkBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="brand_id", columns={"brand_id"})})
 * @ORM\Entity(repositoryClass="Veta\HomeworkBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=30, nullable=false)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="discription", type="text", nullable=false)
     */
    private $discription;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=30, nullable=false)
     */
    private $price;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \Veta\HomeworkBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Veta\HomeworkBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Veta\HomeworkBundle\Entity\Brand
     *
     * @ORM\ManyToOne(targetEntity="Veta\HomeworkBundle\Entity\Brand")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;



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
     * Set productName
     *
     * @param string $productName
     *
     * @return Product
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set discription
     *
     * @param string $discription
     *
     * @return Product
     */
    public function setDiscription($discription)
    {
        $this->discription = $discription;

        return $this;
    }

    /**
     * Get discription
     *
     * @return string
     */
    public function getDiscription()
    {
        return $this->discription;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Product
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
     * Set category
     *
     * @param \Veta\HomeworkBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\Veta\HomeworkBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Veta\HomeworkBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set brand
     *
     * @param \Veta\HomeworkBundle\Entity\Brand $brand
     *
     * @return Product
     */
    public function setBrand(\Veta\HomeworkBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Veta\HomeworkBundle\Entity\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
