<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 21/12/2018
 * Time: 15:09
 */

// src/AppBundle/Repository/ProductRepository.php
namespace App\Repository;
use Doctrine\ORM\EntityRepository;


class ContainershipRepository extends EntityRepository
{
    public function findAllContainership()
    {
        return $this->findAll();
    }
    public function findContainershipById($id) {
        return $this->findOneBy(array('id' => $id));
    }
}