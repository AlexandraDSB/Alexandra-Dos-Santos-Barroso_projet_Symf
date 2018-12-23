<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 21/12/2018
 * Time: 13:50
 */

namespace App\Controller;

use APP\Service\ContainerService;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;


class ContainerController extends AbstractController
{

    public function init(ContainerService $containerService )
    {

        $data = $containerService->getContainers();


        return $this->render('list_containers/list_containers.html.twig', [
            'data' => $data,
        ]);
    }

    public function initid(ContainerService $containerService,$id)
    {
        $data = $containerService->getContainerById($id);

        return $this->render('temp_container/container.html.twig', [
            'data' => $data,
        ]);
    }


}