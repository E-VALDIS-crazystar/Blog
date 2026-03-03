<?php

if(!isset($_GET["id"]) || $_GET["id"] == ""){
    redirectIfNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id";
$parms = ["id" => $_GET["id"]];
$post = $db->query($sql, $parms)->fetch();
require "views/posts/show.view.php";

if(!$post){
    redirectIfNotFound();
}

?>