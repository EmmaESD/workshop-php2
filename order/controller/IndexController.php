<?php
require_once './products/model/entity/Products.php';
require_once './products/model/repository/ProductRepository.php';

class IndexController {

	public function index() {
		$productRepository = new ProductRepository();
		$products = $productRepository->findAll();
		require_once('./order/view/home.php');
	}

}



