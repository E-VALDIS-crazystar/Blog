<?php

$pageTitle = "Viens ieraksts";

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}

$comments = $db->query(
    "SELECT * FROM comments WHERE id = :id",
    ["id" => $_GET["id"]]
)->fetchAll();

$post_id = $_GET["id"] ?? null;
$comments = $db->query(
    "SELECT * FROM comments WHERE post_id = :post_id",
    ["post_id" => $post_id]
)->fetchAll();

require "views/posts/show.view.php";

?>