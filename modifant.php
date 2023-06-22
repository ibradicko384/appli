<?php
require 'connexion.php';

$parent = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $eleve_id = $_POST['eleve_id'];
    $eleve_nom_complet = $_POST['eleve_nom_complet'];
    $annee_scolaire = $_POST['annee_scolaire'];
    $trimestre = $_POST['trimestre'];
    $moyenne = $_POST['moyenne'];

    // Mettre à jour les données de la moyenne de l'enfant dans la base de données
    $requete = "UPDATE moyenne SET eleve_id = :eleve_id, eleve_nom_complet = :eleve_nom_complet, annee_scolaire = :annee_scolaire, trimestre = :trimestre, moyenne = :moyenne WHERE id = :id";
    $stmt = $conn->prepare($requete);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':eleve_id', $eleve_id);
    $stmt->bindParam(':eleve_nom_complet', $eleve_nom_complet);
    $stmt->bindParam(':annee_scolaire', $annee_scolaire);
    $stmt->bindParam(':trimestre', $trimestre);
    $stmt->bindParam(':moyenne', $moyenne);

    // Vérifier si l'exécution de la requête a réussi
    if ($stmt->execute()) {
        header("Location: moyenne.php");
        exit();
    } else {
        echo "Erreur lors de la modification de la moyenne.";
    }
} else {
    // Vérifier si l'ID de la moyenne est transmis via $_GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Récupérer les données de la moyenne de l'enfant à modifier
        $requete = "SELECT * FROM moyenne WHERE id = :id";
        $stmt = $conn->prepare($requete);
        $stmt->bindParam(':id', $id);

        // Vérifier si l'exécution de la requête a réussi
        if ($stmt->execute()) {
            $moyenne = $stmt->fetch(PDO::FETCH_ASSOC); // Utilisez $moyenne au lieu de $parent

            if (!$moyenne) {
                echo "Moyenne non trouvée.";
                exit();
            }
        } else {
            echo "Erreur lors de la récupération de la moyenne à modifier.";
            exit();
        }
    } else {
        echo "ID de la moyenne non spécifié.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">  
                <form method="POST" action="">
                    <input type="hidden" name="id" value="<?php echo $moyenne['id']; ?>">
                    <label for="nom">Identifiant</label>
                    <input type="text" name="eleve_id" value="<?php echo $moyenne['eleve_id']; ?>"><br>
                    <label for="prenom">Nom et Prénom:</label>
                    <input type="text" name="eleve_nom_complet" value="<?php echo $moyenne['eleve_nom_complet']; ?>"><br>
                    <label for="annee">Année_scolaire</label>
                    <input type="text" name="annee_scolaire" value="<?php echo $moyenne['annee_scolaire']; ?>"><br>
                    <label for="trimestre">Trimestre</label>
                    <input type="text" name="trimestre" value="<?php echo $moyenne['trimestre']; ?>"><br>
                    <label for="decimal">Moyenne:</label>
                    <input type="text" name="moyenne" value="<?php echo $moyenne['moyenne']; ?>"><br>
                    <br>
                    <input type="submit" value="Modifier">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
