<?php
// src/AppBundle/Entity/User.php

namespace HamsterHubBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \Date
     */
    private $birth;

    /**
     * @var string
     */
    private $path;

    public function __construct()
    {
        parent::__construct();
        $this->setPath("profile_pictures/default/default.jpg");
    }

    /**
     * Set date
     *
     * @param \Date $birth
     * @return User
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Date
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return User
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
