<?php require "views/components/header.php"; ?>

    <header>
        <h1>EMUĀRS / BLOGS</h1>

        <div class="nav">
            <?php require "views/components/navbar.php"; ?>
        </div>
    </header>
    
    <div class="create-post">
        <h2>Rediģēt ierakstu</h2>
        <form method="POST">
            <label><textarea name="content" placeholder="Ieraksta saturs..."><?= $_POST['content'] ?? $post['content'] ?></textarea></label>
            <label><textarea style="display:none;" name="id" value="<?= $post['id'] ?>"></textarea></label>
            <?php if(isset($errors["content"])) { ?>
                <p><?= $errors["content"] ?></p>
            <?php } ?>
            <button type="submit">Rediģēt</button>
        </form>

<?php require "views/components/footer.php"; ?>