
<?php require_once('./order/view/partials/header.php'); ?>
	

	<ul>
		<?php foreach ($products as $product): ?>
			<li>
            	<p>Nom : <?php echo $product->productName; ?></p>
            	<p>Description : <?php echo $product->productInfos; ?></p>
            	<p>Prix : <?php echo $product->productPrice; ?> €</p>
            	<p>Statut : <?php echo $product->productStatus; ?></p>
        	</li>
		<?php endforeach ?>
	</ul>


	<?php require_once('./order/view/partials/footer.php'); ?>