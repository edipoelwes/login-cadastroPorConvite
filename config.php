<?php
try{
    $pdo = new PDO(
        "mysql:dbname=cadastro_por_convite;host=localhost",
        "root",
        ""
    );

}catch (PDOException $erro){
    echo "Erro: {$erro->getMessage()}";
}
