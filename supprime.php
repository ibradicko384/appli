<?php
require'connexion.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $gab="DELETE FROM moyenne WHERE id = :id";
    $stmt=$conn->prepare($gab);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: listepapa.php");
    exit(); 
}
else{
    echo"suppression réussie";
    header("Location: listepapa.php");
    exit(); 
}
?>


