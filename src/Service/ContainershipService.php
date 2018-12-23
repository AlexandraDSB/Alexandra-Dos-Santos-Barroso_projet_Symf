<?php

namespace App\Service;

use App\Entity\Containership;
use Doctrine\ORM\EntityManagerInterface;

class ContainershipService{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function getContainership()
    {
        return $this->entityManager->getRepository(Containership::class)->findAllContainership();
    }
    public function getContainershipById($id) {
        return $this->entityManager->getRepository(Containership::class)->findContainershipById($id);
    }
}