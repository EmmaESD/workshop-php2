<?php 
class Product {

    public static $DEFAUT_PRICE = 2;
    public static $STATUS_DEFAUT_PRODUCTS = false;
    public static $MAX_PRICE = 500;
    public static $MIN_PRICE = 1

    private ?string $productName;

    private ?float $productPrice;

    private ?string $productInfos;

    private bool $productStatus;

    public function __construct(array $listProducts) {
        $this->listProducts = $listProducts;
        $this->productPrice = Products::$DEFAUT_PRICE;
        $this->productStatus = Products::$STATUS_DEFAUT_PRODUCTS;

    }

    public function createProduct(float $productPrice, string $productInfos, string $productName){
        if (!$productName || !$productInfos) {
            throw new Exception("Veuillez entrer un nom et une description");
        }

        if (strlen($productName) < 1 || strlen($productName) > 100) {
            throw new Exception("Le nom du produit doit contenir entre 1 et 100 caractères");
        }
    
        if ($productPrice > Product::$MAX_PRICE || $productPrice < Product::$MIN_PRICE) {
            throw new Exception('Le prix doit être compris entre 1 et 500 €');
        }
        
    }
    
}