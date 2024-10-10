<?php var_dump($_SESSION) ?>

<?php require_once('./order/view/partials/header.php'); ?>
	
	<main>
		<p>Votre Produit :</p>

        <p>nom : <?php echo "$productName"?></p>
        <p>Description: <? echo "$productInfos"?></p>
        <p>Prix: <? echo "$productPrice"?></p>
	</main>


	<?php require_once('./order/view/partials/footer.php'); ?>