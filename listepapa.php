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
            background-color: silver;
        }
    </style>
</head>
<body>
      <div class="container mt-3 text-white">
        <h3 class="bg-primary">La liste des parents d'élèves à gérer au cas</h3>
    
		<table class="table table-striped text-white mt-5">
				<tr>
					<th>N°</th>
                    <th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
                    <th>Mot de passe</th>
                    <th>Action</th>
				</tr>
                <?php
                require 'connexion.php'; 
                $requete = " SELECT * FROM parent";
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
                                        
                  echo '
                        <td class="text-danger">
                        <a class="soulig"  href="#" data-toggle="modal" data-target="#myModal' . $row["id"] . '">
                        <button type="button" class="btn btn-info">Détails</button> 
                        </a>
                        </td>';
                  echo '
                        <td class="text-black">
                        <a class="soulig" href="modifier.php?id=' . $row["id"] . '" >
                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-warning">Modifier</button>
                        </a>
                        </td>';
                  echo '
                    <td class="text-danger">
                        <a onclick="return confirm(\'Voulez vous vraiment supprimer?\');" class="soulig" href="supprimer.php?id=' . $row["id"] . '">
                        <button type="button" class="btn btn-danger">Supprimer</button>
                        </a>
                    </td>';

                  echo "</tr>";
                  $num++;

                  echo '<div class=" bag modal fade" id="myModal' . $row["id"] . '" role="dialog">';
                  echo '  <div class="modal-dialog">';
                  echo '    <div class="modal-content">';
                  echo '      <div class="modal-header">';
                  echo '        <h4 class="modal-title">Détails de l\'étudiant <span class="text-danger" >' . $row["nom"] . '</span> </h4>';
                  echo '        <button type="button" class="close" data-dismiss="modal">&times;</button>';
                  echo '      </div>';
                  echo '      <div class="modal-body ">';
                  echo '        <p class="text-primary">eleve_id : ' . $row["nom"] . '</p>';
                  echo '        <p class="text-primary">eleve_nom_complet : ' . $row["prenom"] . '</p>';
                  echo '        <p class="text-primary">annee_scolaire : ' . $row["email"] . '</p>';
                  echo '        <p class="text-primary">trimestre : ' . $row["mot_de_passe"] . '</p>';
                  echo '      </div>';
                  echo '      <div class="modal-footer">';
                  echo '        <button type="button" class="btn btn-default btn-primary "   data-dismiss="modal">Fermer</button>';
                  echo '      </div>';
                  echo '    </div>';
                  echo '  </div>';
                  echo '</div>';
              }
          } else {
              echo "<tr><td colspan='6'>Aucune donnée trouvée.</td></tr>";
          }

          $connect = null;
          ?>
      </table>
      <p><button type="button" class="btn btn-info"><a class="abc"  href="admin.php">Retour à l'accueil</a></button></p>
      <p><button type="button" class="btn btn-info"><a class="abc"  href="inspapa.php">Ajout parent</a></button></p>
</div>
<div class="container text-center">
  <div class="row bg-dark">
    <p class="kakra">Copyright © Université Joseph KI-ZERBO 2020 - Tous droit réservés. Powered by DSI</p>
  </div>
</div>
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../style/bootstrap-5.2.3-dist/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
</body>

</html>