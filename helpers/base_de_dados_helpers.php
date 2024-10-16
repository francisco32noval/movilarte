<?php 


$host = "localhost";
$dbname = "movilarte_db";
$user = "root";
$pass = "";
$conexao = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8mb4;", $user, $pass);


function selectSQL($sql, $params=[]){
    global $conexao;
    $consulta = $conexao->prepare($sql);

    $consulta->execute($params);

    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function selectSQLUnico($sql, $params=[]){
    global $conexao;

    $consulta = $conexao->prepare($sql);

    $consulta->execute($params);

    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);


    return $resultado;
}

function iduSQL($sql, $params = []) {
    global $conexao;

    $consulta = $conexao->prepare($sql);

    $sucesso = $consulta->execute($params);

    return $sucesso;
}