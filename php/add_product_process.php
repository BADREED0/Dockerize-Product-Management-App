<?php
include "./connect.php";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $product_name = $_POST["product_name"];
    $description = $_POST["description"];
    $category_id = $_POST["category"]; // Nouveau champ "Catégorie"

    // Préparer la requête SQL d'insertion du produit
    $sql = "INSERT INTO Product(name, description, category_id) VALUES (?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$product_name, $description, $category_id]);

    // Rediriger vers la page index.php
    header('Location: index.php');
    exit;
} else {
    echo "Le formulaire n'a pas été soumis.";
}
?>

