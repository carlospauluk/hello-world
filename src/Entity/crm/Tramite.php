<?php

namespace App\Entity\crm;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\base\EntityId;
use Symfony\Component\Validator\Constraints as Assert;

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
	public $id;

	/**
	 *
	 * @Assert\NotBlank()
	 * @ORM\Column(type="string", length=2000)
	 */
	public $descricao;

	/**
	 *
	 * @Assert\NotNull()
	 * @Assert\Type("\DateTime")
	 * @ORM\Column(type="datetime")
	 */
	public $dtEntrada;

	
}
