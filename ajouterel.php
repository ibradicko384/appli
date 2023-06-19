<<?php
    include '../connec.php';
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $classe = $_POST['classe'];
    $date_naissance = $_POST['date_naissance'];
  

    $requete = "INSERT INTO eleve ( nom, prenom, classe, date_naissance ) VALUES (?, ?, ?, ?)";
    $statement = $pdo->prepare($requete);

    try {
        $statement->execute([ $nom, $prenom, $classe, $date_naissance ]);
        header('Location:eleve.php?ajoute=ok');
        exit;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>

