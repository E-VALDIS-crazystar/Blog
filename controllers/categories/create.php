<?php

$pageTitle = "EVIS Emuāri - izveidot kategoriju";

require "Validator.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

        if (!Validator::string($_POST["category_name"], max:25)){
        $errors["category_name"] = "Kategorijas nosaukumam jābūt ievadītam un ne garākam par 25 rakstzīmēm.";
    }
 
    if (empty($errors)) {

        $sql = "INSERT INTO categories (category_name) VALUES (:category_name)";
        $params = ["category_name" => $_POST["category_name"]];
        $db->query($sql, $params);
        header("Location: /categories");
        exit();
    }
}

require "views/categories/create.view.php";