   <?php

$pageTitle = "EVIS Emuāri - izveidot ierakstu";

require "Validator.php";

$categories = $db->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if (!Validator::string($_POST["content"], max:50)){
        $errors["content"] = "Saturam jābūt ievadītam un ne garākam par 50 rakstzīmēm.";
    }
 
    if (empty($errors)) {

        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = ["content" => $_POST["content"], "category_id" => $_POST["category_id"]];
        $db->query($sql, $params);
        header("Location: /");
        exit();
    }
}

require "views/posts/create.view.php";

   
   
   
