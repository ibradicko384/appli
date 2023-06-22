<?php
require 'connexion.php';

$parent = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Mettre à jour les données du parent dans la base de données
    $requete = "UPDATE parent SET nom = :nom, prenom = :prenom, email = :email, mot_de_passe = :mot_de_passe WHERE id = :id";
    $stmt = $conn->prepare($requete);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);

    // Vérifier si l'exécution de la requête a réussi
    if ($stmt->execute()) {
        header("Location: listepapa.php");
        exit();
    } else {
        echo "Erreur lors de la modification du parent.";
    }
} else {
    // Vérifier si l'ID du parent est transmis via $_GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Récupérer les données du parent à modifier
        $requete = "SELECT * FROM parent WHERE id = :id";
        $stmt = $conn->prepare($requete);
        $stmt->bindParam(':id', $id);
        
        // Vérifier si l'exécution de la requête a réussi
        if ($stmt->execute()) {
            $parent = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$parent) {
                echo "Parent non trouvé.";
                exit();
            }
        } else {
            echo "Erreur lors de la récupération du parent à modifier.";
            exit();
        }
    } else {
        echo "ID du parent non spécifié.";
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
                    <input type="hidden" name="id" value="<?php echo $parent['id']; ?>">
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" value="<?php echo $parent['nom']; ?>"><br>
                    <label for="prenom">Prénom:</label>
                    <input type="text" name="prenom" value="<?php echo $parent['prenom']; ?>"><br>
                    <label for="email">Messagerie électronique:</label>
                    <input type="text" name="email" value="<?php echo $parent['email']; ?>"><br>
                    <label for="mot_de_passe">Mot de passe:</label>
                    <input type="text" name="mot_de_passe" value="<?php echo $parent['mot_de_passe']; ?>"><br>
                    <br>
                    <input type="submit" value="Modifier">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
