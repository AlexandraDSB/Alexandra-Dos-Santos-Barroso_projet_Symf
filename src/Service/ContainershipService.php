<?php

namespace App\Service;

use App\Entity\ContainerShip;
use Doctrine\ORM\EntityManagerInterface;

class ContainershipService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getContainership()
    {
        return $this->entityManager->getRepository(ContainerShip::class)->findAllContainership();
    }

    public function getContainershipById($id)
    {
        return $this->entityManager->getRepository(ContainerShip::class)->findContainershipById($id);
    }
}