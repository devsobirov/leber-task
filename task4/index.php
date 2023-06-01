<?php

if (PHP_SAPI != 'cli') {
    echo  "You opening file from browser, also you can test it via PHP CLI; <br>";
    echo  "Open the terminal, enter the current file directory and run from CLI 'php index.php -a arg1 -b arg2 whatever'; <br>";
    echo  "Note that I assumed you have global 'php' alias that can your execute php commands;' <br>";
    highlight_file(__DIR__ . DIRECTORY_SEPARATOR.'index.php');
    exit();
}

echo 'Всех переданных аргументов можно получить через глобальый массив $argv, где первый элемент всегда названия файла;'. PHP_EOL;
echo 'Так же, можно получить полувить количкства переданных аргументов через глобальый массив $argc'. PHP_EOL;
echo 'Переданных аргументов с флагами можно получить через функцию getopt(\'arg:arg1:..\'), например, -а foo -b bar; как getopt(\'a:b:\')'. PHP_EOL;

echo "Всего аргументов переданы: " . $argc - 1 . PHP_EOL;
echo "Содердания аргументов: ". PHP_EOL;
var_dump($argv);
var_dump(getopt("a:b:"));
