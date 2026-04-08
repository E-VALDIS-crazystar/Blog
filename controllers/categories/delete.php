<?php

require "Validator.php";

$id = $_POST['id'] ?? null;
if (!Validator::number($id)) {
    header('Location: /categories');
    exit();
}

$db->query('DELETE FROM categories WHERE id = :id', ['id' => $id]);

header('Location: /categories');
exit();