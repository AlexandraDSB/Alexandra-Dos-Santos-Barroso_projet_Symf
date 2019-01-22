<?php

namespace App\Controller;

use App\Service\ContainerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ContainerController extends AbstractController
{

    /**
     * @param ContainerService $containerService
     * @return Response
     */
    public function init(ContainerService $containerService): Response
    {

        $data = $containerService->getContainers();


        return $this->render('list_containers/truc.html.twig', [
            'data' => $data,
        ]);
    }

    /**
     * @param ContainerService $containerService
     * @param int $id
     * @return Response
     */
    public function initid(ContainerService $containerService, $id): Response
    {
        $data = $containerService->getContainerById($id);

        return $this->render('temp_container/container.html.twig', [
            'data' => $data,
        ]);
    }


}