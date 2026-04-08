   <?php

$pageTitle = "EVIS Emuāri - rediģēt ierakstu";

require "Validator.php";

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();
$categories = $db->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

    if (!Validator::string($_POST["content"], max:50)){
        $errors["content"] = "Saturam jābūt ievadītam un ne garākam par 50 rakstzīmēm.";
    }
 
    if (empty($errors)) {

        $sql = "UPDATE posts SET content = :content, category_id = :category_id WHERE id = :id";
        $params = ["content" => $_POST["content"], "category_id" => $_POST["category_id"], "id" => $post["id"]];
        $db->query($sql, $params);
        header("Location: /show?id=" . $post["id"]);
        exit();
    }
}

require "views/posts/edit.view.php";