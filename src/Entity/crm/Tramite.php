<?php

namespace App\Entity\crm;

use App\Entity\base\EntityId;
use Symfony\Component\Validator\Constraints as Assert;

class Tramite extends EntityId {

    /**
     * @Assert\NotNull()
     * @Assert\Type("Cliente")
     */
    public $cliente;

    /**
     * @Assert\NotBlank()
     */
	public $descricao;

	/**
	 * @Assert\NotBlank()
	 * @Assert\Type("\DateTime")
	 */
	public $dtEntrada;
	
	// public $histAtual;

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDtEntrada()
    {
        return $this->dtEntrada;
    }

    /**
     * @param mixed $dtEntrada
     */
    public function setDtEntrada(\DateTime $dtEntrada)
    {
        $this->dtEntrada = $dtEntrada;
    }

    
	

	
}