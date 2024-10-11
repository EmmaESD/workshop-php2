<?php 

require_once './products/model/entity/Products.php';
require_once './products/model/repository/ProductRepository.php';

class ListProductsController {

    public function ListProductsController() {
        $productRepository = new ProductRepository();
		$products = $productRepository->findAll();

        require_once './products/view/list-products.php';
    }

    

}   