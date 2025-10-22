<?php

namespace App\Repository;

use App\Entity\Categoria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categoria>
 */
class CategoriaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoria::class);
    }

    public function salvar($nome)
    {

        $entidade = new Categoria();

        $entidade->setNome($nome);
        $this->getEntityManager()->persist($entidade);
        $this->getEntityManager()->flush();
        
        return true;
    }


public function deletar($id)
{

$categoria = $this->findOneBy(["id" =>$id]);

}

}
