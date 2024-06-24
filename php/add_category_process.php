<?php
include "./connect.php";

    // Vérifier si le champ du nom de la catégorie est défini et non vide
    if (isset($_POST["category_name"]) && !empty($_POST["category_name"])) {
        // Récupérer le nom de la catégorie depuis le formulaire
        $category_name = $_POST["category_name"];

        // Préparer la requête SQL d'insertion de la catégorie
        $sql = "INSERT INTO Category_Product(category_name) VALUES (?)";
        $var1 = $db->prepare($sql);
        $var1->execute([$category_name]);

        // Rediriger vers la page index.php
        header('Location: index.php');
        exit;
    } else {
        echo "Le champ du nom de la catégorie est vide.";
    }

?>
