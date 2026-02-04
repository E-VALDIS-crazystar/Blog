<?php require "components/layout.php"; ?>
  
<?= $header ?>

    <header>
        <h1>EMUĀRS / BLOGS</h1>

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
    
    <div class="posts">
        <?php if (count($posts) == 0) { ?>
            <p>❌❌❌ Nav atrasts neviens ieraksts! ❌❌❌ 🐣 Ievadi citu vārdu vai frāzi. 🐣</p>
        <?php } else { ?>
            <ul>
                <?php foreach($posts as $post) { ?>
                <li> <?= $post["content"] ?> </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>


    <img src='house.jpg'/>

<?= $footer ?>
