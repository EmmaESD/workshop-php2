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

	public function persist(Product $product): Product {
		$_SESSION['product'] = $product;
		return $product;
	}

	public function find(): ?Product {
		if (!isset($_SESSION['product'])) {
			return null;
		}

		return $_SESSION['product'];
	}

}