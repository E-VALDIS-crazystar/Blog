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
        <h1>Kategorijas</h1>

        <div class="nav">
            <a href='./index.php'>Sākums</a>
            <a href='./story.php'>Stāsts</a>
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