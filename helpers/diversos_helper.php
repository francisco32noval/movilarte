<?php

function getDiversos(){

    $resultado = selectSQL("SELECT * FROM diversos");

    return $resultado;
}

function getDiversosEspecifico($id){

    $sql = "SELECT * FROM diversos WHERE id = :id";

    $params = [':id' => $id];

    $resultado = selectSQLUnico($sql, $params);

    return $resultado;
}