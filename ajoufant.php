<?php
require 'connexion.php';

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["date"]) && isset($_POST["id_parent"]) && isset($_POST["annee_scolaire"]) && isset($_POST["trimestre"]) && isset($_POST["moyenne"])) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $date_naissance = htmlspecialchars($_POST["date"]);
    $id_parent = htmlspecialchars($_POST["id_parent"]);
    $annee_scolaire = htmlspecialchars($_POST["annee_scolaire"]);
    $trimestre = htmlspecialchars($_POST["trimestre"]);
    $moyenne = htmlspecialchars($_POST["moyenne"]);

    $sql = "INSERT INTO eleve (nom, prenom, date_de_naissance, id_parent, annee_scolaire, trimestre, moyenne) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nom, $prenom, $date_naissance, $id_parent, $annee_scolaire, $trimestre, $moyenne]);

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
        <input type="text" class="form-control" name="nom" id="floatingInput" placeholder="Nom" required>
        <label for="floatingInput">Nom</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" name="prenom" id="floatingInput" placeholder="Prénom" required>
        <label for="floatingInput">Prénom</label>
    </div><br>
    <div class="form-floating">
        <input type="date" class="form-control" name="date" id="floatingdate" placeholder="date" required>
        <label for="floatingdate">Date de naissance</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" id="floatingtext" name="id_parent" placeholder="Id Parent" required>
        <label for="floatingtext">L'id parent</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" id="floatingtext" name="annee_scolaire" placeholder="Année scolaire" required>
        <label for="floatingtext">L'Année scolaire</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" id="floatingtext" name="trimestre" placeholder="Trimestre" required>
        <label for="floatingtext">Le trimestre</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" id="floatingtext" name="moyenne" placeholder="Moyenne" required>
        <label for="floatingtext">La moyenne</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="administrer">Inscrire</button>
</form>
<div class="container">
    <p><button type="button" class="btn btn-ifo"><a class="abc"  href="listelev.php">Retour à la liste</a></button></p>
</div>

<script src="boost/cdn.jsdelivr.net_npm_chart.js@4.2.1_dist_chart.umd.min.js"></script>
<script src="boost/getbootstrap.com_docs_5.3_examples_dashboard_dashboard.js"></script>
</body>
</html>
