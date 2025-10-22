<?php

namespace App\Controller;

use App\Repository\CategoriaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ListarCategoriasController extends AbstractController
{

public function __construct(
    private CategoriaRepository $categoriaRepository,
    
)
{
    
}

    #[Route('/categorias', name: 'app_listar_categorias' ,methods:"GET")]
    public function index(): Response
    {
        return $this->render('listar_categorias/index.html.twig', [
'categorias' => $this->categoriaRepository->findAll(),      

]);
    }
}


