<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Category;

class SiteController extends Controller
{
    public function products($request, $response, $args)
    {
        $category = Category::all();

        return $this->view->render($response, 'products.twig', compact('category'));
    }

    public function rentals($request, $response, $args)
    {
        return $this->view->render($response, 'rentals.twig');
    }

    public function service($request, $response, $args)
    {
        return $this->view->render($response, 'service.twig');
    }

    public function videos($request, $response, $args)
    {
        return $this->view->render($response, 'videos.twig');
    }

    public function contact($request, $response, $args)
    {
        return $this->view->render($response, 'contact.twig');
    }
}

