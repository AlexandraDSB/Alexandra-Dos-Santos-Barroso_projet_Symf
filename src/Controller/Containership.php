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


class Containership extends AbstractController
{

    public function init()
    {

        return $this->render('truc/base.html.twig');
    }

    public function initid($id)
    {

        return $this->render('truc/base.html.twig', [
            'id' => $id,
        ]);
    }
}