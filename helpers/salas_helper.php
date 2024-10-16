<?php


function getSalas(){

    $resultado = selectSQL("SELECT * FROM salas");

    return $resultado;

}

function getSalaEspecifica($id){


    $sql = "SELECT * FROM salas WHERE id= :id";

    $params = [':id' => $id];

    $resultado = selectSQLUnico($sql, $params);

    return $resultado;

}