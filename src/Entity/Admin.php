<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Admin extends BaseUser
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rank;
    
    /**
     * @param mixed $rank
     * @return Admin
     */
    public function setRank($rank): Admin
    {
        $this->rank = $rank;
        
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getRank(): Admin
    {
        return $this->rank;
    }
}
