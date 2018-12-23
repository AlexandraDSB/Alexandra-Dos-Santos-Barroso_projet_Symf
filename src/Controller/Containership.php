<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 21/12/2018
 * Time: 13:51
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use App\Service\ContainershipService;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;


class Containership extends AbstractController
{

    public function init(ContainershipService $containershipService)
    {
        $data = $containershipService->getcontainership();

        return $this->render('list_containership/list_containership.html.twig', [
            'data' => $data,
        ]);
    }

    public function initid(ContainershipService $containershipService,$id)
    {
        $data = $containershipService->getcontainershipById($id);

        return $this->render('containership/containership_details.html.twig', [
            'data' => $data,
        ]);
    }
}