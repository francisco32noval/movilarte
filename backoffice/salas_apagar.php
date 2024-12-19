<?php


require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if($form){

    $id = intval($_GET["id"]);
    iduSQL("DELETE FROM salas WHERE id=$id");
}

header("Location: salas.php");

?>