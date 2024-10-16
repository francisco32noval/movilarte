<?php


function getQuartos(){

    $resultado = selectSQL("SELECT * FROM quartos");

    return $resultado;
}

function getQuartoEspecifico($id){

    $sql = "SELECT * FROM quartos WHERE id = :id";

    $params = [':id' => $id];

    $resultado = selectSQLUnico($sql, $params);

    return $resultado;
}