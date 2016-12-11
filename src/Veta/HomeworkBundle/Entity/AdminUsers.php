<?php

namespace Veta\HomeworkBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * AdminUsers
 *
 * @ORM\Table(name="admin_users", indexes={@ORM\Index(name="privilege_id", columns={"privilege_id"})})
 * @ORM\Entity(repositoryClass="Veta\HomeworkBundle\Repository\AdminUsersRepository")
 */
class AdminUsers
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
     * @ORM\Column(name="login", type="string", length=30, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=255, nullable=false)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="nick_name", type="string", length=30, nullable=false)
     */
    private $nickName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;

    /**
     * @var \Veta\HomeworkBundle\Entity\Privilege
     *
     * @ORM\ManyToOne(targetEntity="Veta\HomeworkBundle\Entity\Privilege")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="privilege_id", referencedColumnName="id")
     * })
     */
    private $privilege;



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
     * Set login
     *
     * @param string $login
     *
     * @return AdminUsers
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return AdminUsers
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     *
     * @return AdminUsers
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return AdminUsers
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
     * Set privilege
     *
     * @param \Veta\HomeworkBundle\Entity\Privilege $privilege
     *
     * @return AdminUsers
     */
    public function setPrivilege(\Veta\HomeworkBundle\Entity\Privilege $privilege = null)
    {
        $this->privilege = $privilege;

        return $this;
    }

    /**
     * Get privilege
     *
     * @return \Veta\HomeworkBundle\Entity\Privilege
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }
}
