<?php require "views/components/header.php"; ?>

    <header>
        <h1>EMUĀRS / BLOGS</h1>

        <div class="nav">
            <?php require "views/components/navbar.php"; ?>
        </div>
    </header>
    
    <div class="create-comment">
        <h2>Izveidot jaunu komentāru</h2>
        <form method="POST">
            <label><textarea name="Komentars" placeholder="Komentāra saturs..."><?= $_POST['Komentars'] ?? '' ?></textarea></label>
            <?php if(isset($errors["Komentars"])) { ?>
                <p><?= $errors["Komentars"] ?></p>
            <?php } ?>
            <label><input type="text" name="Autors" placeholder="Autors..." value="<?= $_POST['Autors'] ?? '' ?>"></label>
            <?php if(isset($errors["Autors"])) { ?>
                <p><?= $errors["Autors"] ?></p>
            <?php } ?>
            <button type="submit">Izveidot</button>
        </form>

<?php require "views/components/footer.php"; ?>