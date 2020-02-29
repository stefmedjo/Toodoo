<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Todo
 *
 * @ORM\Table(name="todo")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\TodoRepository")
 */
class Todo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var bool
     *
     * @ORM\Column(name="isDone", type="boolean")
     */
    private $isDone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdOn", type="datetime")
     */
    private $createdOn;

    /**
     * @var \DateTime
     * @ORM\Column(name="dueDate", type="datetime")
     */
    private $dueDate;

    /**
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\Category", inversedBy="todos", cascade={"remove"})
     */
    private $category;

    public function __construct(){
        $this->createdOn = new \DateTime();
        $this->isDone = false;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Todo
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set isDone
     *
     * @param boolean $isDone
     *
     * @return Todo
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }

    /**
     * Get isDone
     *
     * @return bool
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     *
     * @return Todo
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return Todo
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set category
     *
     * @param \MainBundle\Entity\Category $category
     *
     * @return Todo
     */
    public function setCategory(\MainBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \MainBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
