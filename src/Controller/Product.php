<?php
/**
 * Created by PhpStorm.
 * User: marie
 * Date: 21/12/2018
 * Time: 13:51
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use App\Service\ProductService;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;


class Product extends AbstractController
{

    public function init(ProductService $productService)
    {
        $data = $productService->getProduct();

        return $this->render('list_product/list_product.html.twig', [
            'data' => $data,
        ]);
    }

    public function initid(ProductService $productService,$id)
    {
        $data = $productService->getProductById($id);

        return $this->render('product/product_details.html.twig', [
            'data' => $data,
        ]);
    }
}