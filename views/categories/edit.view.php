<?php require "views/components/header.php"; ?>

    <header>
        <h1>EMUĀRS / BLOGS</h1>

        <div class="nav">
            <?php require "views/components/navbar.php"; ?>
        </div>
    </header>
    
    <div class="create-post">
        <h2>Rediģēt kategoriju</h2>
        <form method="POST">
            <label><textarea name="category_name" placeholder="Kategorijas nosaukums..."><?= $_POST['category_name'] ?? $category['category_name'] ?></textarea></label>
            <label><textarea style="display:none;" name="id" value="<?= $category['id'] ?>"></textarea></label>
            <?php if(isset($errors["category_name"])) { ?>
                <p><?= $errors["category_name"] ?></p>
            <?php } ?>
            
            <button type="submit">Rediģēt</button>
        </form>

<?php require "views/components/footer.php"; ?>