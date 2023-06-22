<?php
require 'connexion.php';
$data = $_POST;

if (isset($data["eleve_id"]) && isset($data["eleve_nom_complet"]) && isset($data["anneescolaire"]) && isset($data["decimal"]) && isset($data["moyenne"])) {
    $pdo = new PDO("mysql:host=localhost;dbname=primaire", "root", "");
    $stmt = $pdo->prepare("INSERT INTO moyenne (eleve_id, eleve_nom_complet, annee_scolaire, trimestre, moyenne) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$data["eleve_id"], $data["eleve_nom_complet"], $data["anneescolaire"], $data["decimal"], $data["moyenne"]]);

    echo "Enfant ajouté avec succès !";
} else {
    echo "Données manquantes pour ajouter un enfant.";
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Dashboard Template · Bootstrap v5.3</title>
    <link href="boost/getbootstrap.com_docs_5.3_dist_css_bootstrap.min.css" rel="stylesheet">
    <link href="boost/cdn.jsdelivr.net_npm_bootstrap-icons@1.10.3_font_bootstrap-icons.css" rel="stylesheet">
    <style>
        /* ... styles ... */
    </style>
    <script src="boost/getbootstrap.com_docs_5.3_assets_js_color-modes.js"></script>
</head>
<body>
<form class="form" style="margin: 50px;" action="" method="POST">
    <h1 class="text-center">Ajouter un élève</h1>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" name="eleve_id" id="floatingInput" placeholder="Identité" required>
        <label for="floatingInput">Identifiant</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" name="eleve_nom_complet" id="floatingInput" placeholder="Nom-Prénom" required>
        <label for="floatingInput">Nom et prénom</label>
    </div><br>
    <div class="form-floating">
        <input type="annee" class="form-control" name="anneescolaire" id="floatingdate" placeholder="date" required>
        <label for="floatingdate">Année scolaire</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" id="floatingtext" name="decimal" placeholder="numero" required>
        <label for="floatingtext">Trimestre</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" id="floatingtext" name="moyenne" placeholder="moyenne" required>
        <label for="floatingtext">Moyenne</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="administrer">Inscrire</button>
</form>
<div class="container">
<p><button type="button" class="btn btn-ifo"><a class="abc"  href="moyenne.php">Retour à l'accueil</a></button></p>
</div>

<script src="boost/cdn.jsdelivr.net_npm_chart.js@4.2.1_dist_chart.umd.min.js"></script>
<script src="boost/getbootstrap.com_docs_5.3_examples_dashboard_dashboard.js"></script>
</body>
</html>
