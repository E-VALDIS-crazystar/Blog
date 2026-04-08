<?php require "views/components/header.php"; ?>
  
    <header>
        <h1>Kategorijas</h1>

        <div class="nav">
            <?php require "views/components/navbar.php"; ?>
        </div>
    </header>
    
    <div class="searchbar">
        <form>
            <input name='search_query' placeholder='Meklēt...' value='<?= $_GET["search_query"] ?? "" ?>' />
            <button>Meklēt</button>
        </form>
    </div>
    
    <div class="categories">
        <?php if (count($categories) == 0) { ?>
            <p>❌❌❌ Nav atrasta neviena kategorija! ❌❌❌ 🐣 Ievadi citu. 🐣</p>
        <?php } else { ?>
            <ul>
                <?php foreach($categories as $category) { ?>
                <li><a href="show-category?id=<?= $category["id"]?>"> <?= htmlspecialchars($category["category_name"]) ?> </a></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

<?php require "views/components/footer.php"; ?>