<?php 
require_once('./common/partials/header.php');

?>
	
	<main>
		<p>Récapitulatif de la commande </p>
		<p>produits :</p>
		<ul> 
			<?php foreach ($products as $product): ?>
				<li> <?php echo "$product->productName" ?> </li>
			<?php endforeach?>
		</ul>
		<p>Nom de la commande :</p>
		<p>Adresse de livraison: </p>
		<p>Mode de livraison:</p>
		<p>PRix de la commande:</p>

		
	//Afficher le récapitulatif de la commande.

		<form method="POST" action="http://localhost:8888/correction-workshop/process-payment">

			<label for="payment"></label>

			<button type="submit">Payer</button>

		</form>
	</main>

<?php require_once('./common/partials/footer.php'); ?>