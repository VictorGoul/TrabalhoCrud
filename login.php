<?php
    //colocando a conexão com o banco de dados
    include("dbconnect.php");
    $nome_usuario = $_POST['nomeUsuario'];
    $sql = $pdo->prepare("INSERT INTO usuario VALUES (null, ?)");
    $sql->execute(array($nome_usuario));
    header("Location:   paginaCrud.html");
?>