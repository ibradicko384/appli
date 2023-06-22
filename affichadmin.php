<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Liste_UFR</title>
    <style>
        body{
            background-color: lightsteelblue;
        }
    </style>
</head>
<body>
      <div class="container mt-3 text-white">
        <h3 class="bg-primary">L'administrateur adjointe</h3>
    
		<table class="table table-striped text-white mt-5">
				<tr>
					<th>N°</th>
                    <th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
                    <th>Mot de passe</th>
				</tr>
                <?php
                require 'connexion.php'; 
                $requete = " SELECT * FROM admini";
                $result = $conn->query($requete);
                if($result->rowcount()>0){
                    $num= 1;
                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        $apprenantsId = $row["id"];
                        echo "<tr>";
                        echo "<td>" . $num. "</td>";
                        echo "<td>" . $row["nom"] . "</td>";
                        echo "<td>" . $row["prenom"]  . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["mot_de_passe"] . "</td>"; 
                        echo "</tr>";
                    $num++;
              }
          } else {
              echo "<tr><td colspan='6'>Aucune donnée trouvée.</td></tr>";
          }

          $connect = null;
          ?>
      </table>
      <p><button type="button" class="btn btn-info"><a class="abc"  href="admin.php">Retour à l'accueil</a></button></p>
      <p><button type="button" class="btn btn-info"><a class="abc"  href="inspapa.php">Ajout parent</a></button></p>
      <p><button type="button" class="btn btn-info"><a class="abc"  href="ajoufant.php">Ajout élève</a></button></p>
</div>
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../style/bootstrap-5.2.3-dist/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
</body>

</html>