<?php require "views/components/header.php"; ?>

    <header>
        <h1>EMUĀRS / BLOGS</h1>

        <div class="nav">
            <?php require "views/components/navbar.php"; ?>
        </div>
    </header>
    
    <div class="create-post">
        <h2>Izveidot jaunu ierakstu</h2>
        <form method="POST">
            <label><textarea name="content" placeholder="Ieraksta saturs..."><?= $_POST['content'] ?? '' ?></textarea></label>
            <?php if(isset($errors["content"])) { ?>
                <p><?= $errors["content"] ?></p>
            <?php } ?>
            <label>
                <select name="category_id">
                    <option value="">-- Izvēlieties kategoriju --</option>
                    <?php foreach($categories as $category) { ?>
                        <option value="<?= $category['id'] ?>" <?= isset($_POST['category_id']) && $_POST['category_id'] == $category['id'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($category['category_name']) ?>
                        </option>
                    <?php } ?>
                </select>
            </label>
            <button type="submit">Izveidot</button>
        </form>

<?php require "views/components/footer.php"; ?>