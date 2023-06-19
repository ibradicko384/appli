<?php
    session_start();
      include'connexion.php';
      if(isset($_POST)){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $mot_de_passe=$_POST['mot_de_passe'];
        $query = "INSERT INTO admini (nom, prenom, email, mot_de_passe)
        VALUES (:nom, :prenom, :email, :mot_de_passe)";
        $query_run=$conn->prepare($query);
        $query_run->bindParam(':nom',$nom);
        $query_run->bindParam(':prenom',$prenom);
        $query_run->bindParam(':email',$email);
        $query_run->bindParam(':mot_de_passe',$mot_de_passe);
    try {
        $query_run->execute();
        $msg_success=" Vos données ont été bien enregistrées!";
        } catch (PDOException $e) {
                $msg="Erreur d'enregistrement" . $e->getMessage();
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
    <div class="container bg-white mt-5">
        <div class="row fw-{breakpoint}-bold mt-5">
            <div class="col offset-2 text-{breakpoint}-center">
            <h3>L'étudiant(e)</h3>
    <table>
        <tr>
            <td text-align="right">nom</td>
            <td><?php echo ($nom) ?></td>
        </tr>
        <tr>
            <td text-align="right">prenom</td>
            <td><?php echo ($prenom) ?></td>
        </tr>
        <tr>
            <td text-align="right">email</td>
            <td><?php echo ($email) ?></td>
        </tr>
        <tr>
            <td text-align="right">mot de passe</td>
            <td><?php echo ($mot_de_passe) ?></td>
        </tr>
    </table><br><br>
    <h5>a été enregistré avec succès</h5> 
    <p><button type="button" class="kkk" class="btn btn-light"> <a class="abc"  href="index.php">Retour</a></button></p>

            </div>
            
        </div>
        
    </div>
    
</body>
</html>