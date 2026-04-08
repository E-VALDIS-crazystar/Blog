<?php require "views/components/header.php"; ?>

<div class="one-post">
    <h1><?= htmlspecialchars($category["category_name"]) ?></h1>
</div>

<div class="changes">
    <a class="edit" href="/edit-category?id=<?= $category["id"] ?>">Rediģēt</a>
    <form method="POST" action="/delete-category">
        <input type="hidden" name="id" value="<?= $category["id"] ?>">
        <button class="delete" type="submit">Dzēst</button>
    </form>
</div>

<?php require "views/components/footer.php"; ?>