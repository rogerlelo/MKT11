<?php
declare(strict_types=1);
namespace CodeEmailMKT\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

//use Doctrine\ORM\Mapping as ORM;

class Customer
{
    private $id;
    private $name;
    private $email;
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getTags() : Collection
    {
        return $this->tags;
    }
}
