<?php 
    include("dbconnect.php");
    $dados;
    $sql = $pdo->prepare("SELECT * FROM usuario");
    $sql->execute();
    $dados->fetchAll(PDO::FETCH_OBJ);
    
?>