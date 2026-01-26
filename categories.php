<?php

require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);
$sql_query = "SELECT * FROM categories";
$params = [];


if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
    $sql_query = "SELECT * FROM categories WHERE category_name LIKE :search";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}

$categories = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

echo "<h1 style='color: red;'>Kategorijas</h1>";

echo "<form>";
    echo "<input name='search_query' placeholder='Meklēt...' style='width: 250px; border: 2px solid black; border-radius: 5px; padding: 10px; margin: 15px;' />";
    echo "<button style='padding: 10px; border-radius: 5px; border: 2px solid black; cursor: pointer; color: white; background-color: #007bff;'>Meklēt</button>";
echo "</form>";

echo "<ul>";
    foreach($categories as $category) {
        echo "<li>" . $category["category_name"] . "</li>";
    }
echo "</ul>";

?>