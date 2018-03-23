<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller {

// 	public function __construct() {
// 		parent::__construct();
// 		Route::class;
// 	}

	/**
	 *
	 * @Route("/lucky/number")
	 */
	public function number() {
		$number = mt_rand(0, 100);
		
		return $this->render('lucky/number.html.twig', array (
				'number' => $number 
		));
	}

	/**
	 *
	 * @Route("/lucky/templ")
	 */
	public function templ() {
		return $this->render('index.html.twig');
	}

	/**
	 *
	 * @Route("/jzon")
	 *
	 * @return \Symfony\Component\HttpFoundation\JsonResponse
	 */
	public function jzon() {
		return $this->json(array (
				'username' => 'jane.doe' 
		));
	}

	/**
	 *
	 * @Route("/pdfme")
	 *
	 * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
	 */
	public function pdfme() {
		return $this->file('/usr/share/doc/qpdf/qpdf-manual.pdf', 'bla.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
	}
}