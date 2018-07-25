<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $group;
    
    /**
     * @param mixed $group
     * @return User
     */
    public function setGroup($group): User
    {
        $this->group = $group;
        
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }
}
