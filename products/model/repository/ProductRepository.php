<?php

require_once './products/model/entity/Products.php';




class ProductRepository {

	// permet d'initialiser la session (session_start())
	// à chaque fois qu'on instancie la classe OrderRepository
	// sans l'initialisation de la session, on ne peut pas 
	// utiliser correctement la session ($_SESSION)
	public function __construct() {

		session_start();
		
	}

	public function persist(Product $products): void {
		if (!isset($_SESSION['products'])) {
			$_SESSION['products'] = []; 
		}
		$_SESSION['products'][$products->productId] = $products;
	}
	
	
	public function findAll(): ?array {
		
		if (!isset($_SESSION['products'])) {
			return null;
		}

		return $_SESSION['products'];
	}

}