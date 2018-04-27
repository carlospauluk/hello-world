<?php

namespace App\Form\crm;

use App\Entity\crm\Tramite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TramiteType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('descricao', TextType::class, array (
				'label' => 'Descrição' 
		))
			->add('dtEntrada', DateType::class, array (
				'widget' => 'single_text',
				'format' => 'dd/MM/yyyy',
				'label' => 'Dt Entrada',
				'attr' => array ('class' => 'datepicker')
		))
			->add('save', SubmitType::class, array (
				'label' => 'Salvar' 
		));
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array (
				'data_class' => Tramite::class 
		));
	}
}