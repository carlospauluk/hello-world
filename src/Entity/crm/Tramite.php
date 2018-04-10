<?php

namespace App\Entity\crm;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\base\EntityId;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\TramiteRepository")
 */
class Tramite extends EntityId {
	/**
	 *
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;
	
	/**
	 *
	 * @ORM\Column(type="string", length=2000)
	 */
	private $descricao;
	
	/**
	 *
	 * @ORM\Column(type="datetime")
	 */
	private $dtEntrada;
	public function getId() {
		return $this->id;
	}
	public function getDescricao(): ?string {
		return $this->descricao;
	}
	public function setDescricao(string $descricao): self {
		$this->descricao = $descricao;
		
		return $this;
	}
	public function getDtEntrada(): ?\DateTimeInterface {
		return $this->dtEntrada;
	}
	public function setDtEntrada(\DateTimeInterface $dtEntrada): self {
		$this->dtEntrada = $dtEntrada;
		
		return $this;
	}
}
