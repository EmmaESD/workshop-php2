<?php

require_once './products/model/entity/Products.php';
require_once './products/model/repository/ProductRepository.php';


class ProcessCreateProductController {

	public function processCreateProduct() {
		try {

			if (!isset($_POST['productName']) || !isset($_POST['productInfos'])) {
				$errorMessage = "Merci de remplir les champs.";
				
				require_once './order/view/order-error.php';
				return;
			}

			$productName = $_POST['productName'];
			$productPrice = $_POST['productPrice'];
            $productInfos = $_POST['productInfos'];
            $productStatus = isset($_POST['productStatus']) ? $_POST['productStatus'] : false;

			$product = new Product($productName, $productPrice, $productInfos, $productStatus);

			$productRepository = new ProductRepository();
			$productRepository->persist($product);

			require_once './products/view/list-products.php';

		} catch (Exception $e) {
			$errorMessage = $e->getMessage();
			require_once './order/view/order-error.php';
		}


	}


}
