<?php 


function getHome(){
    $resultado = selectSQLUnico("SELECT * FROM home");

    return $resultado;
}