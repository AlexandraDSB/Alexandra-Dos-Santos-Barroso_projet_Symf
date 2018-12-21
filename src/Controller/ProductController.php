<?php
// src/Controller/ProductController.php
// ...
namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\MessageGenerator;

use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{
    function list(LoggerInterface $logger)
    {
        $logger->info('Look! I just used a service');

        return $this->render('article/recent_list.html.twig', [
            'article' => $logger,
        ]);
// ..
;}


    public function new(MessageGenerator $messageGenerator)
    {
        // thanks to the type-hint, the container will instantiate a
        // new MessageGenerator and pass it to you!
        // ...

        $message = $messageGenerator->getHappyMessage();

        return $this->render('truc/truc.html.twig', [
            'data' => $message,
        ]);

    }
}