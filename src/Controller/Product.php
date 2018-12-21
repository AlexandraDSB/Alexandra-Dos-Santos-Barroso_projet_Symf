<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 21/12/2018
 * Time: 13:51
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;


class Product extends AbstractController
{

    public function init()
    {

        return $this->render('truc/truc.html.twig');
    }

    public function initid($id)
    {

        return $this->render('truc/truc.html.twig', [
            'id' => $id,
        ]);
    }
}