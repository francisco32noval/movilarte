<?php 


function getDecoracao(){

    $resultado = selectSQL("SELECT * FROM decoracao");

    return $resultado;
}


function getDecoracaoEspecifica($id){

    $sql = "SELECT * FROM decoracao WHERE id = :id";

    $params = [':id' => $id];

    $resultado = selectSQLUnico($sql, $params);

    return $resultado;
}