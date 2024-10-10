<?php

require_once './model/Order.php';
require_once './model/repository/OrderRepository.php';


class CreateOrderController {

	public function createOrder() {
		$orderRepository = new OrderRepository();
        $order = $orderRepository->find();

		try {

			if (!$order) {
				$errorMessage = "Merci de remplir les champs. J'ai pas fait tout ça pour rien.";
				
				require_once './view/order-error.php';
				return;
			}

			$customerName = $_POST['customerName'];
			$products = $_POST['products'];

			$order = new Order($customerName, $products);

			$orderRepository->persistOrder($order);

			require_once './view/order-created.php';

		} catch (Exception $e) {
			$errorMessage = $e->getMessage();
			require_once './view/order-error.php';
		}


	}

	function persistOrder(Order $order) {
		$_SESSION['order'] = $order;
	}

}

