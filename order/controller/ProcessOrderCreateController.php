<?php

require_once './order/model/entity/Order.php';
require_once './order/model/repository/OrderRepository.php';
require_once './products/model/entity/Products.php';
require_once './products/model/repository/ProductRepository.php';

class CreateOrderController {

	public function createOrder() {
		try {

			if (!isset($_POST['customerName']) || !isset($_POST['products'])) {
				$errorMessage = "Merci de remplir les champs. J'ai pas fait tout ça pour rien.";
				
				require_once './order/view/order-error.php';
				return;
			}
			
			$customerName = $_POST['customerName'];
			//tableau avec des ids de produits existants dans la session
			$products = $_POST['products'];
			$completeProducts = [];
			
			// pour chaque id de produit :
			// tu récupères le produit en entier dans la session
			// et tu l'envoies au constructor d'order

			foreach ($products as $productId) {
				
				
				if (isset($_SESSION['products'][$productId])) {
					
					$completeProducts[] = $_SESSION['products'][$productId];
					var_dump($_POST['products']);
				} else {
					
					throw new Exception("Le produit avec l'ID $productId est introuvable dans la session.");
				}
			}	
			$order = new Order($customerName, $completeProducts);

			$orderRepository = new OrderRepository();
			$orderRepository->persist($order);

			require_once './order/view/order-created.php';

		} catch (Exception $e) {
			$errorMessage = $e->getMessage();
			require_once './order/view/order-error.php';
		}


	}


}
