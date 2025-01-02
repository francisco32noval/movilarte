<?php


require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if($form){

    $id = intval($_GET["id"]);
    iduSQL("DELETE FROM sofas WHERE id=$id");
}

header("Location: sofas.php");

?>