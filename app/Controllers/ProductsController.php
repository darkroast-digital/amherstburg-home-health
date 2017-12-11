<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;

class ProductsController extends Controller
{
    public function index($request, $response, $args)
    {
        $types = Type::all();

        return $this->view->render($response, 'products.twig', compact('types'));
    }

    public function categories($request, $response, $args) {
        $categories = Category::where('type', $args['type'])->get();
        $type = Type::where('slug', $args['type'])->first();
        $typeUrl = $args['type'];

        return $this->view->render($response, 'products/categories.twig', compact('categories', 'type', 'typeUrl'));
    }

    public function products($request, $response, $args) {
        $products = Product::where('category', $args['category'])->get();
        $categoryUrl = $args['category'];
        $typeUrl = $args['type'];
        $category = Category::where('slug', $args['category'])->first();
        $type = Type::where('slug', $args['type'])->first();

        return $this->view->render($response, 'products/products.twig', compact('products', 'category', 'categoryUrl', 'typeUrl', 'type'));
    }

    public function product($request, $response, $args) {
        $product = Product::where('slug', $args['product'])->first();
        $category = Category::where('slug', $args['category'])->first();
        $type = Type::where('slug', $args['type'])->first();

        return $this->view->render($response, 'products/product.twig', compact('product', 'category', 'type'));
    }
}

