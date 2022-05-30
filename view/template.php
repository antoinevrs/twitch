<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twitch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" type="text/css" />
    <link rel="stylesheet" href="./public/css/styles.css" type="text/css"/>
    <link rel="stylesheet" href="./public/css/normalize.css" type="text/css"/>
    <script type="text/javascript" src="./public/js/script.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href='index.php'>Accueil</a>
            <a href='index.php?page=planning'>Planning</a>
            <a href='index.php?page=loadout'>Loadout</a>
            <a href='index.php?page=shop'>Shop</a>
        </nav>
        
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            
            <ul class="menu__box">
                <li><a class="menu__item" href="index.php">Home</a></li>
                <li><a class="menu__item" href="index.php?page=planning">Planning</a></li>
                <li><a class="menu__item" href="index.php?page=shop">Shop</a></li>
                <li><a class="menu__item" href="index.php?page=loadout">Loadout</a></li>
            </ul>
        </div>
        <div class="account">
            <a href="index.php?page=account"><i class="far fa-user"></i> Mon compte </a>
            <a href="index.php?page=cart"><i class="fas fa-shopping-cart"></i> Mon panier </a>
        </div>
    </header>
    
    <main>
        <div class="container">
            <?=$content?>
        </div>
    </main>
    
    <footer>
        <a href="https://twitter.com/_Arerty"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/arerty/?hl=fr"><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-discord"></i></a>
        <a href="https://www.twitch.tv/arerty"><i class="fab fa-twitch"></i></a>
    </footer>
</body>
</html>