<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles_vineyards.css">
</head>

<body>
    <div class="background_video"><video src="video/grains.mp4" autoplay loop muted></video></div>
    <div class="top_v">
        <input type="checkbox" id="check_menu">
        <div class="logo_v">
            <img class="smile_v" src="images/koala2.jpg" alt="морда коалы на фоне звездного неба">
            <label for="check_menu"><img class="menu_icon_v" src="instruments/menu_icon.svg" alt="иконка меню"></label>
        </div>
        <nav class="menu_top_v">
            <p><a href="index.php">АВСТРАЛИЯ</a></p>
            <p><a href="wine_regions.php">РЕГИОНЫ</a></p>
            <p><a href="grapes.php">ВИНОГРАД</a></p>
            <p><a href="vineyards.php">ВИНОДЕЛЬНИ</a></p>
            <p><a href="contacts.php">КОНТАКТЫ</a></p>
        </nav>
        <nav class="menu_top_vert_v">
            <p><a href="index.php">АВСТРАЛИЯ</a></p>
            <p><a href="wine_regions.php">РЕГИОНЫ</a></p>
            <p><a href="grapes.php">ВИНОГРАД</a></p>
            <p><a href="vineyards.php">ВИНОДЕЛЬНИ</a></p>
            <p><a href="contacts.php">КОНТАКТЫ</a></p>
        </nav>
    </div>
<?=$content?>
    <div class="bottom_v">
        <div class="reserved_v">
            <p>Австралийские-вина.рф<sup>&copy;</sup> 2021. Все права защищены.</p>
        </div>
    </div>
</body>

</html>