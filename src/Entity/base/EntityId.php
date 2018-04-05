<?php

namespace App\Entity\base;

use Symfony\Component\Validator\Constraints as Assert;

class EntityId {

    /**
     * @Assert\NotNull()
     * @Assert\Type("\DateTime")
     */
    public $inserted;
    
    /**
     * @Assert\NotNull()
     * @Assert\Type("\DateTime")
     */
    public $updated;
    
	// Inserir os $insertedBy, $updatedBy e $estabelecimento

    /**
     * @return mixed
     */
    public function getInserted()
    {
        return $this->inserted;
    }

    /**
     * @param mixed $inserted
     */
    public function setInserted(\DateTime $inserted)
    {
        $this->inserted = $inserted;
    }
    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;
    }

    
    
	
    

	
}