<?php

namespace App\Entity\crm;

use App\Entity\base\EntityId;


class Cliente extends EntityId {

    /**
     * @Assert\NotBlank()
     */
	public $nome;
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

	
	

	
}