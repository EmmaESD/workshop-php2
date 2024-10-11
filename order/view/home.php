<?php require_once('./common/partials/header.php'); ?>
<main>

		<form method="POST" action="http://localhost:8888/correction-workshop/create-order">

			<label for="customerName">Nom du client</label>
			<input type="text" id="customerName" name="customerName" required>
			<br>

			<label for="product">Produit</label>

			<select id="product" name="products[]" multiple>
				<?php foreach ($products as $product):?>
					<option value="<?php echo $product->productId; ?>"><?php echo $product->productName; ?></option>
				<?php endforeach ?>
			</select>
			<br>

			<button type="submit">Ajouter</button>

		</form>

	</main>

<?php require_once('./common/partials/footer.php'); ?>