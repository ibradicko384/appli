<?php
function connectAdmin($postData) {
    include 'connec.php';
    $email = $postData['email'];
    $mp = $postData['mp'];
    $requete = "SELECT * FROM administrat WHERE email = ? AND mp = ?";
    $stmt = $pdo->prepare($requete);
    $stmt->execute([$email, $mp]);
    $user = $stmt->fetch();
    return $user;
}
function addAdmin($data) {
    include 'connec.php';
    
    if (isset($data['email']) && !empty($data['email'])) {
        $requete = "INSERT INTO administrat (email, nom, mp) VALUES (:email, :nom, :mp)";
        $statement = $pdo->prepare($requete);
        
        $statement->bindParam(':email', $data['email']);
        $statement->bindParam(':nom', $data['nom']);
        $statement->bindParam(':mp', $data['mp']);
        
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    } else {
        return false; // Gérer le cas où l'email est manquant ou vide
    }
}




 

?>