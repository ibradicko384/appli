<?php
include('connexion.php');

if (isset($_POST['connecter'])) {
    $email_saisi = htmlspecialchars($_POST['email']);
    $mot_de_passe_saisi = htmlspecialchars($_POST['mot_de_passe']);

    $sql = "SELECT id, email, mot_de_passe FROM parent WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email_saisi);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $parent_id = $row["id"];
        $email_defaut = $row["email"];
        $mot_de_passe_defaut = $row["mot_de_passe"];

        if ($mot_de_passe_saisi === $mot_de_passe_defaut) {
            // Mot de passe correct, authentification réussie

            // Récupérer les informations sur les enfants du parent
            $sql_enfants = "SELECT * FROM eleve WHERE id_parent = :parent_id";
            $stmt_enfants = $conn->prepare($sql_enfants);
            $stmt_enfants->bindParam(':parent_id', $parent_id);
            $stmt_enfants->execute();
            $enfants = $stmt_enfants->fetchAll(PDO::FETCH_ASSOC);

            // Afficher les informations sur les enfants et permettre au parent de sélectionner un enfant pour voir la moyenne
            if ($enfants) {
                echo "<h3>Liste des enfants :</h3>";
                echo "<ul>";
                foreach ($enfants as $enfant) {
                    echo "<li>{$enfant['nom']} {$enfant['prenom']}</li>";
                }
                echo "</ul>";

                // Afficher le formulaire pour consulter la moyenne de l'enfant sélectionné
                echo "<h3>Consulter la moyenne :</h3>";
                echo "<form method='POST' action='consulmoyen.php'>";
                echo "<label for='enfant_id'>Sélectionnez l'enfant :</label>";
                echo "<select name='enfant_id' required>";
                foreach ($enfants as $enfant) {
                    echo "<option value='{$enfant['id']}'>{$enfant['nom']} {$enfant['prenom']}</option>";
                }
                echo "</select>";
                echo "<input type='submit' value='Consulter'>";
                echo "</form>";
            } else {
                echo "Aucun enfant trouvé pour ce parent.";
            }
        } else {
            echo '<h6 class="text-danger">Votre mot de passe est incorrect!</h6>';
        }
    } else {
        header('Location: accueil.php');
        exit;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col offset-4">
            <div class="box">
                <div class="form">
                    <h2>S'identifier</h2>
                    <form method="POST" action="">
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                            <i></i>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="mot_de_passe" required="required">
                            <span>Mot de passe</span>
                            <i></i>
                        </div>
                        <input type="submit" class="bottom" name="connecter" value="Se connecter">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <p><button type="button" class="btn btn-nfo"><a class="abc"  href="parent.php">Retour à l'accueil</a></button></p> -->
</div>
<script src="style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
<script src="style/bootstrap-5.2.3-dist/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="javascript/javascript.js"></script>
</body>
</html>
