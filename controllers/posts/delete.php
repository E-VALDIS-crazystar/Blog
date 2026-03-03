<?php

require "Validator.php";

$id = $_POST['id'] ?? null;
if (!Validator::number($id)) {
    header('Location: /');
    exit();
}

$db->query('DELETE FROM posts WHERE id = :id', ['id' => $id]);

header('Location: /');
exit();