<?php require "views/components/header.php"; ?>

<div class="one-post">
    <h1><?= htmlspecialchars($post["content"]) ?></h1>
</div>

<div class="changes">
    <a class="edit" href="/edit?id=<?= $post["id"] ?>">Rediģēt</a>
    <form method="POST" action="/delete">
        <input type="hidden" name="id" value="<?= $post["id"] ?>">
        <button class="delete" type="submit">Dzēst</button>
    </form>
</div>


<?php require "views/components/footer.php"; ?>