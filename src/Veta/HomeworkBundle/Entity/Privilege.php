<?php

namespace Veta\HomeworkBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Privilege
 *
 * @ORM\Table(name="privilege")
 * @ORM\Entity(repositoryClass="Veta\HomeworkBundle\Repository\PrivilegeRepository")
 */
class Privilege
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
     * @ORM\Column(name="privilege_name", type="string", length=50, nullable=false)
     */
    private $privilegeName;



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
     * Set privilegeName
     *
     * @param string $privilegeName
     *
     * @return Privilege
     */
    public function setPrivilegeName($privilegeName)
    {
        $this->privilegeName = $privilegeName;

        return $this;
    }

    /**
     * Get privilegeName
     *
     * @return string
     */
    public function getPrivilegeName()
    {
        return $this->privilegeName;
    }
}
