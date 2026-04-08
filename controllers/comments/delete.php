<?php

require "Validator.php";

$id = $_POST['id'] ?? null;
if (!Validator::number($id)) {
    header('Location: /posts');
    exit();
}

$db->query('DELETE FROM comments WHERE id = :id', ['id' => $id]);

header('Location: /');
exit();