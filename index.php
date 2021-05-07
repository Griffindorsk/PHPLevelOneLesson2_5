<?php
//заголовки страниц
$title = "Австралийские вина";

function renderTemplate($page, $content = '', $title = '') {
    ob_start();
    include $page;
    return ob_get_clean();
}

//главная страница: внутренняя структура
$content = renderTemplate('main_layout.php');

//главная страница: полное оформление
$page = renderTemplate('layout.php', $content, $title);

//главная страница: вывод на экран
print($page);
?>