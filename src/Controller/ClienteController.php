<?php
namespace App\Controller;

use App\Entity\crm\Cliente;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClienteController extends Controller
{

    /**
     *
     * @Route("/cliente", name="cliente")
     */
    public function index()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();
        
        $cliente = new Cliente();
        $cliente->setNome("CARLOS EDUARDO PAULUK");
        
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($cliente);
        
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
        
        return new Response('Saved new product with id ' . $cliente->getId());
    }
}
