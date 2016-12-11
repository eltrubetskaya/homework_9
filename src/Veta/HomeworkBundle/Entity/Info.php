<?php

namespace Veta\HomeworkBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Info
 *
 * @ORM\Table(name="info")
 * @ORM\Entity(repositoryClass="Veta\HomeworkBundle\Repository\InfoRepository")
 */
class Info
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
     * @ORM\Column(name="info_name", type="string", length=50, nullable=false)
     */
    private $infoName;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;



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
     * Set infoName
     *
     * @param string $infoName
     *
     * @return Info
     */
    public function setInfoName($infoName)
    {
        $this->infoName = $infoName;

        return $this;
    }

    /**
     * Get infoName
     *
     * @return string
     */
    public function getInfoName()
    {
        return $this->infoName;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Info
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
