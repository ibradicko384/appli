<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <style>
        body{
            background-color: lightslategray;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="row">
        <table id="moyenneTable" class="table table-striped text-white mt-5">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Id parent</th>
                <th>Année scolaire</th>
                <th>Trimestre</th>
                <th>Moyenne</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
        require 'connexion.php';
        $conn = new PDO("mysql:host=localhost;dbname=primaire", "root", "");
        $requete = "SELECT * FROM eleve";
        $result = $conn->query($requete);
        if ($result->rowCount() > 0) {
            $num = 1;
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $num . "</td>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["date_de_naissance"] . "</td>";
                echo "<td>" . $row["id_parent"] . "</td>";
                echo "<td>" . $row["annee_scolaire"] . "</td>"; // Nouvelle colonne : Année scolaire
                echo "<td>" . $row["trimestre"] . "</td>"; // Nouvelle colonne : Trimestre
                echo "<td>" . $row["moyenne"] . "</td>"; // Nouvelle colonne : Moyenne
                echo "</tr>";
                $num++;
            }
        } else {
            echo "<tr><td colspan='8'>Aucune donnée trouvée.</td></tr>";
        }
        $conn = null;
        ?>
        </tbody>
        </table>

        </div>
        <p><button type="button" class="btn btn-nfo"><a class="abc"  href="parent.php">Retour à l'accueil</a></button></p>
    </div>
    
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#moyenneTable').DataTable();
        });
    </script>
</body>
</html>
