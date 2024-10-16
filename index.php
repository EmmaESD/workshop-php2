<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./order/controller/IndexController.php');
require_once('./order/controller/ProcessOrderCreateController.php');
require_once('./order/controller/PayController.php');
require_once('./order/controller/ProcessPaymentController.php');
require_once('./order/controller/ProcessShippingAddressController.php');
require_once('./order/controller/ProcessShippingMethodController.php');
require_once('./order/controller/SetShippingAddressController.php');
require_once('./order/controller/SetShippingMethodController.php');
require_once('./products/controller/CreateProductController.php');
require_once('./products/controller/ProcessCreateProductController.php');
require_once('./products/controller/ListProductsController.php');

// Récupère l'url actuelle et supprime le chemin de base
// c'est à dire : http://localhost:8888/correction-workshop/public/
// donc cela ne garde que la fin de l'url

$requestUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/correction-workshop/', '', $uri);
$endUri = trim($endUri, '/');


if($endUri === "") {    
    $indexController = new IndexController();
    $indexController->index();
    return;
} 

if($endUri === "create-order") {
    $createOrderController = new CreateOrderController();
    $createOrderController->createOrder();
    return;
}  


if ($endUri === "pay") {
    $payController = new PayController();
    $payController->pay();
    return;
}


if ($endUri === "process-payment") {
    $processPaymentController = new ProcessPaymentController();
    $processPaymentController->processPayment();
    return;
}

if ($endUri === "process-shipping-address") {
    $processShippingAddressController = new ProcessShippingAddressController();
    $processShippingAddressController->processShippingAddress();
    return;
}

if ($endUri === "process-shipping-method") {
    $processShippingMethodController = new ProcessShippingMethodController();
    $processShippingMethodController->processShippingMethod();
    return;
}

if ($endUri === "set-shipping-address") {
    $setShippingAddressController = new SetShippingAddressController();
    $setShippingAddressController->setShippingAddress();
    return;
}

if ($endUri === "set-shipping-method") {
    $setShippingMethodController = new SetShippingMethodController();
    $setShippingMethodController->setShippingMethod();
    return;
}

if ($endUri === "create-product") {
    $productRepository = new CreateProductController();
    $productRepository->createProduct();
    return;
}

if ($endUri === "process-create-product") {
    $setCreateProductRepository = new ProcessCreateProductController();
    $setCreateProductRepository->processCreateProduct();
    return;
}

if ($endUri === "product-created") {
    $ProductCreatedRepository = new ListProductsController();
    $ProductCreatedRepository->listProductsController();
    return;
}
