<?php
$new_value = $_POST['value'];
$file_path = 'value.txt'; // указываем путь к файлу с текущим значением
file_put_contents($file_path, $new_value); // записываем новое значение в файл
echo $new_value; // возвращаем новое значение для отображения на странице
?>


