<?php
echo "<h2>1. Как в Laravel защитить route авторизацией по токену одной строкой кода?</h2>";

echo "<p> Чтобы добавить авторизвцию по токену в маршрутах Ларавель \"одной строкой кода\"
 достаточно добавить маршрут или группу маршрутов в мидлвар \"sanctum:auth\",
  если Sanctum - дефолтный пакет Ларавель для авторизации API маршрутов же настроен </p>";

echo "<p> Если установлен пакет Passport - то \"auth:api\"</p>";
echo "<p> Прилагаю пример:</p>";

highlight_file(__DIR__.DIRECTORY_SEPARATOR.'example-middleware.php');

echo "<h2>2. Как в модели Laravel указать на связь “один ко многим”?</h2>";
echo "<p>С помощью методов 'belongsTo' & 'hasMany' в Eloquent моделях</p>";
echo "<p> Прилагаю пример:</p>";

highlight_file(__DIR__. DIRECTORY_SEPARATOR. 'example-relations.php');