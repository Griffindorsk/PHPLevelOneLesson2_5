<?php
//заголовки страниц
$title = "Австралия | Контакты";

function renderTemplate($page, $content = '', $title = '') {
    ob_start();
    include $page;
    return ob_get_clean();
}

//главная страница: внутренняя структура
$content = renderTemplate('contacts_layout.php');

//главная страница: полное оформление
$page = renderTemplate('layout.php', $content, $title);

//главная страница: вывод на экран
print($page);
?>