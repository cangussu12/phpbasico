<?php
    
    
    $pdo = new PDO('mysql:host=localhost;dbname=phpbasico','root','');

    $sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome DESC LIMIT 3");
    /* ASC - Crescente e DESC Descrecente*/
    $sql->execute();
    $clientes = $sql->fetchAll();

    foreach($clientes as $key => $value) {

        echo $value['nome'];
        echo '<hr>';    
    }

?>