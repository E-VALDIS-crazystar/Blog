<?php require "components/layout.php"; ?>

<?= $header ?>
  
    <header>
        <h1>Kategorijas</h1>

        <div class="nav">
            <?php require "components/navbar.php"; ?>
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
            <p>❌❌❌ Nav atrasts neviens ieraksts! ❌❌❌ 🐣 Ievadi citu vārdu vai frāzi. 🐣</p>
        <?php } else { ?>
            <ul>
                <?php foreach($categories as $category) { ?>
                <li> <?= $category["category_name"] ?> </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

<?= $footer ?>