<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname='primaire';
       $conn = new PDO("mysql:host=$servername;dbname=primaire", $username, $password);
       if ($conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)){
       }else{echo "Erreur : " . $e->POSTMessage();}
?>   