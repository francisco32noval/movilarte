<?php


function getSofas(){

    $resultado = selectSQL("SELECT * FROM sofas");

    return $resultado;

}


function getSofaEspecifico($id){

    $sql = "SELECT * FROM sofas WHERE id = :id";

    $params = [':id' => $id];

    $resultado = selectSQLUnico($sql, $params);

    return $resultado;
}