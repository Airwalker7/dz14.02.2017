<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

//2. Закончить начатую работу по формированию навигационных ссылок из массива.
// Только теперь в массиве прописать не только название разделов сайта,
// но и привязать к ним страницы, кликая по которым пользователь сможет переходить на соответствующие страницы.
// Сами страницы делать не нужно, только меню. Вывод сделать динамическим, используя знания функций для работы с массивами в цикле
<?php
$array_menu['Main'] = 'Главная';
$array_menu['Services'] = 'Услуги';
$array_menu['Service'] = 'Сервис';
$array_menu['Online shop'] = 'Интернет магазин';
$array_menu['Contacts'] = 'Контакты';
$array_menu['Freedback'] = 'Обратная связь';
?>
<div>
    <ul>
       <?php foreach ($array_menu as $key=>$value):?>
           <li><a href="Страница%201"><?php echo $value ?></a></li>
           </br>
    <?php endforeach; ?>
    </ul>
</div>
</body>
</html>