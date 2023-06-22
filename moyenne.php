<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
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
    <h3 class="bg-primary">La liste des moyennes de tous les élèves du lycée</h3>

    <table class="table table-striped text-white mt-5">
        <tr>
            <th>N°</th>
            <th>Nom et prénom</th>
            <th>Année_scolaire</th>
            <th>Trimestre</th>
            <th>Moyenne</th>
            <th></th>
            <th>Action</th>
            <th></th>
        </tr>
        <?php
        require 'connexion.php';
        $requete = " SELECT * FROM moyenne";
        $result = $conn->query($requete);
        if($result->rowCount() > 0){
            $num = 1;
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $apprenantsId = $row["id"];
                echo "<tr>";
                echo "<td>" . $num . "</td>";
                echo "<td>" . $row["eleve_nom_complet"] . "</td>";
                echo "<td>" . $row["annee_scolaire"] . "</td>";
                echo "<td>" . $row["trimestre"] . "</td>";
                echo "<td>" . $row["moyenne"] . "</td>";

                echo '
                <td class="text-danger">
                    <a class="soulig"  href="#" data-toggle="modal" data-target="#myModal' . $row["id"] . '">
                        <button type="button" class="btn btn-info">Détails</button> 
                    </a>
                </td>';
                echo '
                <td class="text-black">
                    <a class="soulig" href="modifant.php?id=' . $row["id"] . '" >
                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-warning">Modifier</button>
                    </a>
                </td>';
                echo '
                <td class="text-danger">
                    <a onclick="return confirm(\'Voulez-vous vraiment supprimer ?\');" class="soulig" href="supprimer.php?id=' . $row["id"] . '">
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </a>
                </td>';

                echo "</tr>";
                $num++;

                echo '<div class="bag modal fade" id="myModal' . $row["id"] . '" role="dialog">';
                echo '    <div class="modal-dialog">';
                echo '        <div class="modal-content">';
                echo '            <div class="modal-header">';
                echo '                <h4 class="modal-title">Détails de l\'étudiant <span class="text-danger">' . $row["nom"] . '</span></h4>';
                echo '                <button type="button" class="close" data-dismiss="modal">&times;</button>';
                echo '            </div>';
                echo '            <div class="modal-body">';
                echo '                <p class="text-primary">eleve_id : ' . $row["eleve_id"] . '</p>';
                echo '                <p class="text-primary">eleve_nom_complet : ' . $row["eleve_nom_complet"] . '</p>';
                echo '                <p class="text-primary">annee_scolaire : ' . $row["annee_scolaire"] . '</p>';
                echo '                <p class="text-primary">trimestre : ' . $row["trimestre"] . '</p>';
                echo '                <p class="text-primary">moyenne : ' . $row["moyenne"] . '</p>';
                echo '            </div>';
                echo '            <div class="modal-footer">';
                echo '                <button type="button" class="btn btn-default btn-primary" data-dismiss="modal">Fermer</button>';
                echo '            </div>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        } else {
            echo "<tr><td colspan='6'>Aucune donnée trouvée.</td></tr>";
        }

        $connect = null;
        ?>
    </table>
    <p><button type="button" class="btn btn-info"><a class="abc"  href="ajoumoyen.php">Ajout moyenne</a></button></p>
    <p><button type="button" class="btn btn-info"><a class="abc"  href="admin.php">Retour à l'accueil</a></button></p>
</div>
<div class="container text-center">
    <div class="row bg-dark">
        <p class="kakra">Copyright © Université Joseph KI-ZERBO 2020 - Tous droits réservés. Powered by DSI</p>
    </div>
</div>
<script src="style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
<script src="style/bootstrap-5.2.3-dist/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="javascript/javascript.js"></script>
</body>
</html>
