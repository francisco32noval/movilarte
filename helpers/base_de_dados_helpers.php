<?php 


$host = "localhost";
$dbname = "movilarte_db";
$user = "root";
$pass = "";
$conexao = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8mb4;", $user, $pass);


function selectSQL($sql){
    global $conexao;
    $consulta = $conexao->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}