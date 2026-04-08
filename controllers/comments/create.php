<?php

$pageTitle = "EVIS Emuāri - komentēt";

require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if (!Validator::string($_POST["Komentars"], max:100)){
        $errors["Komentars"] = "Komentāram ir jābūt ievadītam un ne garākam par 100 rakstzīmēm.";
    }
    if (!Validator::string($_POST["Autors"], max:50)){
        $errors["Autors"] = "Autoram ir jābūt ievadītam un ne garākam par 50 rakstzīmēm.";
    }
 
    if (empty($errors)) {

    $sql = "INSERT INTO comments (Komentars, Autors, Izveidots, post_id) VALUES (:Komentars, :Autors, NOW(), :post_id)";
    $params = ["Komentars" => $_POST["Komentars"], "Autors" => $_POST["Autors"], "post_id" => $_GET["post_id"]];
        $db->query($sql, $params);
        header("Location: /");
        exit();
    }
}


require "views/comments/create.view.php";