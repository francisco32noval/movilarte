<?php 


function getCarousel(){

    $resultado = selectSQL("SELECT * FROM carousel");

    return $resultado;
}


function getCarouselEspecifico($id){

    $sql = "SELECT * FROM carousel WHERE id = :id";

    $params = [':id' => $id];

    $resultado = selectSQLUnico($sql, $params);

    return $resultado;
}