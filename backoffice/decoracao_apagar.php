<?php


require_once("../requisicoes.php");

$form = isset($_GET["id"]);
if($form){
    


    $id = intval($_GET["id"]);
    iduSQL("DELETE FROM decoracao WHERE id=$id");
}

header("Location: decoracao.php");

?>