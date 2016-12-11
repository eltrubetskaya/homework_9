<?php

namespace Veta\HomeworkBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="status_order_id", columns={"status_order_id"}), @ORM\Index(name="product_id", columns={"product_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity(repositoryClass="Veta\HomeworkBundle\Repository\OrdersRepository")
 */
class Orders
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
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=false)
     */
    private $comments;

    /**
     * @var \Veta\HomeworkBundle\Entity\StatusOrder
     *
     * @ORM\ManyToOne(targetEntity="Veta\HomeworkBundle\Entity\StatusOrder")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_order_id", referencedColumnName="id")
     * })
     */
    private $statusOrder;

    /**
     * @var \Veta\HomeworkBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="Veta\HomeworkBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \Veta\HomeworkBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Veta\HomeworkBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return Orders
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Orders
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set statusOrder
     *
     * @param \Veta\HomeworkBundle\Entity\StatusOrder $statusOrder
     *
     * @return Orders
     */
    public function setStatusOrder(\Veta\HomeworkBundle\Entity\StatusOrder $statusOrder = null)
    {
        $this->statusOrder = $statusOrder;

        return $this;
    }

    /**
     * Get statusOrder
     *
     * @return \Veta\HomeworkBundle\Entity\StatusOrder
     */
    public function getStatusOrder()
    {
        return $this->statusOrder;
    }

    /**
     * Set product
     *
     * @param \Veta\HomeworkBundle\Entity\Product $product
     *
     * @return Orders
     */
    public function setProduct(\Veta\HomeworkBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Veta\HomeworkBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set user
     *
     * @param \Veta\HomeworkBundle\Entity\Users $user
     *
     * @return Orders
     */
    public function setUser(\Veta\HomeworkBundle\Entity\Users $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Veta\HomeworkBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }
}
