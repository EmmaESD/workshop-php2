<?php require_once './order/view/partials/header.php'; ?>
<body>
    <main>
        <form action="./products/controller/CreateProductController.php" method="POST">
            <input type="text" id="productName" name="productName" placeholder="Nom du produit" required >
            <input type="text" id="productPrice" name="productPrice" placeholder="prix">
            <input type="text" id="productInfos" name="productInfos" placeholder="Description du produit" required>
            <label for="producStatus">Produit disponible :</label>
            <input type="checkbox" id="productStatus" name="productStatus">
            <button type="submit">Ajouter</button>
        </form>
    </main>
</body>
</html>