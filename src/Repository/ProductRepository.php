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


class ProductRepository extends EntityRepository
{
    public function findAllProduct(): array
    {
        return $this->findAll();
    }

    public function findProductById($id)
    {
        return $this->findOneBy(array('id' => $id));
    }
}