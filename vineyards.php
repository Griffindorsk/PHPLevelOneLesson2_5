<?php
//заголовки страниц
$title = "Австралия | Винодельни";

function renderTemplate($page, $content = '', $title = '') {
    ob_start();
    include $page;
    return ob_get_clean();
}

//главная страница: внутренняя структура
$content = renderTemplate('vineyards_layout.php');

//главная страница: полное оформление
$page = renderTemplate('layout_video.php', $content, $title);

//главная страница: вывод на экран
print($page);
?>