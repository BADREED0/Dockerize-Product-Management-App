<?php
include "./connect.php";

// Requête pour récupérer les produits avec leurs catégories
$sql = "SELECT Product.id, Product.name AS product_name, Product.description, Category_Product.category_name 
        FROM Product
        LEFT JOIN Category_Product ON Product.category_id = Category_Product.id";
$stmt = $db->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Liste des produits</h1>
    <table>
        <tr>
            <th>Nom du produit</th>
            <th>Description</th>
            <th>Catégorie</th>
        </tr>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product['product_name']; ?></td>
            <td><?php echo $product['description']; ?></td>
            <td><?php echo $product['category_name']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
