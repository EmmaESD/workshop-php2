<?php require_once './order/view/partials/header.php'; ?>
<body>
    <main>
        <form action="http://localhost:8888/correction-workshop/process-create-product" method="POST">
            <input type="text" id="productName" name="productName" placeholder="Nom du produit" required >
            <input type="text" id="productPrice" name="productPrice" placeholder="prix">
            <input type="text" id="productInfos" name="productInfos" placeholder="Description du produit" required>
            <label for="producStatusTrue">Produit disponible :</label>
            <input type="checkbox" id="productStatusTrue" name="productStatusTrue">
            <label for="producStatus">Produit indisponible :</label>
            <input type="checkbox" id="productStatusFalse" name="productStatusFalse">
            <button type="submit">Ajouter</button>
        </form>
    </main>
</body>
</html>