<?php


function getContactos(){

    $resultado = selectSQL("SELECT * FROM contactos");

    return $resultado;
}