<?php

$pageTitle = "EVIS Emuāri - rediģēt komentāru";

require "Validator.php";

$sql = "SELECT * FROM comments WHERE id = :id";
$params = ["id" => $_GET["id"]];
$comment = $db->query($sql, $params)->fetch();
$comments = $db->query("SELECT * FROM comments")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if (!Validator::string($_POST["Komentars"], max:100)){
        $errors["Komentars"] = "Komentāram ir jābūt ievadītam un ne garākam par 100 rakstzīmēm.";
    }
    if (!Validator::string($_POST["Autors"], max:50)){
        $errors["Autors"] = "Autoram ir jābūt ievadītam un ne garākam par 50 rakstzīmēm.";
    }
 
    if (empty($errors)) {

        $sql = "UPDATE comments SET Komentars = :Komentars, Autors = :Autors WHERE id = :id";
        $params = ["Komentars" => $_POST["Komentars"], "Autors" => $_POST["Autors"], "id" => $comment["id"]];
        $db->query($sql, $params);
        header("Location: /show-post?id=" . $post["post_id"]);
        exit();
    }
}

require "views/comments/edit.view.php";