<?php require_once './order/view/partials/header.php'; ?>
<body>
    <main>
        <form action="http://localhost:8888/correction-workshop/process-create-product" method="POST">
            <input type="text" id="productName" name="productName" placeholder="Nom du produit" required >
            <input type="number" id="productPrice" name="productPrice" value="0" step="0.01">
            <input type="text" id="productInfos" name="productInfos" placeholder="Description du produit" required>
            <label for="producStatus">Produit disponible :</label>
            <input type="checkbox" id="productStatus" name="productStatus">
            <button type="submit">Ajouter</button>
        </form>
    </main>
</body>
</html>