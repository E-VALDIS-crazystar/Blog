<?php require "views/components/header.php"; ?>

<div class="one-post">
    <h1><?= htmlspecialchars($post["content"]) ?></h1>
</div>

<div class="changes">
    <a class="edit" href="/edit-post?id=<?= $post["id"] ?>">Rediģēt</a>
    <form method="POST" action="/delete-post">
        <input type="hidden" name="id" value="<?= $post["id"] ?>">
        <button class="delete" type="submit">Dzēst</button>
    </form>
    <a class="comment" href="/create-comment?post_id=<?= $post["id"] ?>">Komentēt</a>
    <a class="back" href="/">Atpakaļ</a>
</div>

<div class="comments-view">
    <h2>Komentāri</h2>
    <?php if (count($comments) == 0) { ?>
        <p>❌❌❌ Nav atrasts neviens komentārs! ❌❌❌ 🐣 Esi pirmais, kas komentē! 🐣</p>
    <?php } else { ?>
        <ul>
            <?php if($post["id"] == $post_id) { foreach($comments as $comment) { ?>
            <li>
                <p class="comment-author"><?= htmlspecialchars($comment["Autors"]) ?></p>
                <p class="comment-text"><?= htmlspecialchars($comment["Komentars"]) ?></p>
                <p class="comment-date"><?= htmlspecialchars($comment["Izveidots"]) ?></p>
                <div class="com-changes">
                    <a class="edit" href="/edit-comment?id=<?= $comment["id"] ?>">Rediģēt</a>
                    <form method="POST" action="/delete-comment">
                        <input type="hidden" name="id" value="<?= $comment["id"] ?>">
                        <button class="delete" type="submit">Dzēst</button>
                    </form>
                </div>
            </li>
            <?php } ?>
        </ul>
    <?php } } ?>
</div>


<?php require "views/components/footer.php"; ?>