<?php

require_once './products/model/repository/ProductRepository.php';

class CreateProductController
{
    public function CreateProduct()
    {
        require_once './products/view/createProduct.php';
    }
}
