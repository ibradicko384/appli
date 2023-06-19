<?php
include('connexion.php');

if (isset($_POST['administrer'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    
    
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO admini (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)";
    $query_run = $conn->prepare($query);   
    $query_run->bindParam(':nom', $nom);
    $query_run->bindParam(':prenom', $prenom);
    $query_run->bindParam(':email', $email);
    $query_run->bindParam(':mot_de_passe', $mot_de_passe_hache);    
    if ($query_run->execute()) {   
        echo $msg_success = "Vos données ont été bien enregistrées!";
        header('Location: index.php');
    } else {
        $msg = "Erreur d'enregistrement";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <form  action="" method="POST">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br><br>
            <label for="prenom">prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
            <input id="administrer" type="submit" name="administrer" value="administrer">
            </form>
            </div>
        </div>
    </div>

    
    <script src="script/script.js"></script>
    <script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
