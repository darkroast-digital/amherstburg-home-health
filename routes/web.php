<?php

/*
|--------------------------------------------------------------------------
| #WEB
|--------------------------------------------------------------------------
*/



use App\Controllers\CategoryController;
use App\Controllers\CollectionController;
use App\Controllers\HomeController;
use App\Controllers\ProductsController;
use App\Controllers\SiteController;
use App\Controllers\TypeController;



// #HOME
// =========================================================================

$app->get('/', HomeController::class . ':index')->setName("home");
$app->post('/', HomeController::class . ':post');




// #PAGES
// =========================================================================

$app->get('/rentals', SiteController::class . ':rentals')->setName("rentals");
$app->get('/service', SiteController::class . ':service')->setName("service");
$app->get('/videos', SiteController::class . ':videos')->setName("videos");
$app->get('/contact', SiteController::class . ':contact')->setName("contact");




// #PRODUCTS
// =========================================================================

$app->group('/products', function(){
    $this->get('', ProductsController::class . ':index')->setName('products');

    $this->get('/{type}', ProductsController::class . ':categories')->setName('categories');

    $this->get('/{type}/{category}', ProductsController::class . ':products')->setName('product-list');

    $this->get('/{type}/{category}/{product}', ProductsController::class . ':product')->setName('product');
});



// $app->get('/products/{slug}', CategoryController::class . ':index')->setName("category");
// $app->get('/products/{category}/{slug}', TypeController::class . ':index')->setName("type");
// $app->get('/products/{category}/{type}/{slug}', CollectionController::class . ':index')->setName("collection");
// $app->get('/products/{category}/{type}/{collection}/{slug}', ProductController::class . ':index')->setName("collection");