<?php

namespace App\Controller;

use App\Repository\ProductDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_default")
     */
    public function index(ProductDataRepository $repo): Response
    {
        return $this->render('default/index.html.twig', [
            'products' => $repo->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_show")
     */
    public function show(ProductDataRepository $repo, int $id): Response
    {
        $product = $repo->find(intval($id));
        //$bundles = $product->getProductBundles();
        //$products = $bundles->first()->getProductData();
        //var_dump($products); die();
        return $this->render('default/show.html.twig', [
            'product' => $product,
        ]);
    }
}
