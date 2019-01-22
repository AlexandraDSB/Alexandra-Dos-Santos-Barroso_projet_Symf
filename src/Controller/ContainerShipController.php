<?php

namespace App\Controller;

use App\Service\ContainershipService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ContainerShipController extends AbstractController
{

    public function init(ContainershipService $containerShipService): Response
    {
        $data = $containerShipService->getContainership();

        return $this->render('list_containership/list_containership.html.twig', [
            'data' => $data,
        ]);
    }

    public function initid(ContainershipService $containerShipService, $id): Response
    {
        $data = $containerShipService->getContainershipById($id);

        return $this->render('containership/containership_details.html.twig', [
            'data' => $data,
        ]);
    }
}