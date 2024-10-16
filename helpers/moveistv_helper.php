<?php 


function getMoveisTv(){

    $resultado = selectSQL("SELECT * FROM moveis_tv");

    return $resultado;
}

function getMoveisEspecifico($id){

    $sql = "SELECT * FROM moveis_tv WHERE id = :id";

    $params = [':id' => $id];

    $resultado = selectSQLUnico($sql, $params);

    return $resultado;
}