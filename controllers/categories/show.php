<?php

if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$parms = ["id" => $_GET["id"]];
$category = $db->query($sql, $parms)->fetch();
require "views/categories/show.view.php";

if(!$category){
    redirectIfNotFound();
}

?>