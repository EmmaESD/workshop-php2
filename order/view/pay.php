<?php require_once('./common/partials/header.php'); ?>
	
	<main>
		<p>Payer la commande (c'est même pas débité sur votre compte. Ou peut être que si. Mais faites confiance) </p>


		<form method="POST" action="http://localhost:8888/correction-workshop/process-payment">

			<label for="payment"></label>

			<button type="submit">Payer</button>

		</form>
	</main>

<?php require_once('./common/partials/footer.php'); ?>