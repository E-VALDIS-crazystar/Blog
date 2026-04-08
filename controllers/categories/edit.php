   <?php

$pageTitle = "EVIS Emuāri - rediģēt kategoriju";

require "Validator.php";

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$category = $db->query($sql, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if (!Validator::string($_POST["category_name"], max:25)){
        $errors["category_name"] = "Kategorijas nosaukumam jābūt ievadītam un ne garākam par 25 rakstzīmēm.";
    }
 
    if (empty($errors)) {

        $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id";
        $params = ["category_name" => $_POST["category_name"], "id" => $category["id"]];
        $db->query($sql, $params);
        header("Location: /show-category?id=" . $category["id"]);
        exit();
    }
}

require "views/categories/edit.view.php";