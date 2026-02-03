<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>EVIS Emuāri</title>
</head>
<body>
  
    <header>
        <h1>EMUĀRS / BLOGS</h1>

        <div class="nav">
            <a href='./categories.php'>Kategorijas</a>
            <a href='./story.php'>Stāsts</a>
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

</body>
</html>
