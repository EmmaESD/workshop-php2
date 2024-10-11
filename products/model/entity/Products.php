<?php 
class Product {

    public static $DEFAUT_PRICE = 2;
    public static $STATUS_DEFAUT_PRODUCTS = false;
    public static $MAX_PRICE = 500;
    public static $MIN_PRICE = 1;

    public string $productId;
    public ?string $productName;
    public float $productPrice;
    public ?string $productInfos;
    public bool $productStatus;

    public function __construct(string $productName, float $productPrice, string $productInfos, bool $productStatus = null) {
        
        if (strlen($productName) < 1 || strlen($productName) > 100) {
            throw new Exception("Le nom du produit doit contenir entre 1 et 100 caractères");
        }

        if ($productPrice == 0){
            $productPrice = Product::$DEFAUT_PRICE;
        }

        if ($productPrice > Product::$MAX_PRICE || $productPrice < Product::$MIN_PRICE) {
            throw new Exception('Le prix doit être compris entre 1 et 500 €');
        }

        if (!$productInfos) {
            throw new Exception("Veuillez entrer une description");
        }

        if($productStatus === null){
            $productStatus = Product::$STATUS_DEFAUT_PRODUCTS;
        }

        $this->productId = uniqid();
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productInfos = $productInfos;
        $this->productStatus = $productStatus;
    }

}
