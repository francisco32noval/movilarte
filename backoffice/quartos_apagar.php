<?php


require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if($form){

    $id = intval($_GET["id"]);
    iduSQL("DELETE FROM quartos WHERE id=$id");
}

header("Location: quartos.php");

?>