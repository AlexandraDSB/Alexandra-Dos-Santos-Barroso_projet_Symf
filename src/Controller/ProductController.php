<?php

namespace App\Controller;

use App\Service\ProductService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends AbstractController
{

    public function init(ProductService $productService): Response
    {
        $data = $productService->getProduct();

        return $this->render('list_product/list_product.html.twig', [
            'data' => $data,
        ]);
    }

    public function initid(ProductService $productService, $id): Response
    {
        $data = $productService->getProductById($id);

        return $this->render('product/product_details.html.twig', [
            'data' => $data,
        ]);
    }
}