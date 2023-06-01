<?php


/**
    Так как сам термин "Механизм повторного использования кода в PHP" не однозначен,предполагаю что речь идёт о Трейтах (Trait);
    В трейтах можно указать методы, свойства и (с PHP 8.2) константы и использовать их
    "подключая" их внутри тело класса с ключнвым словом "use";
    Прилогаю пример:
 **/

trait HasMagics
{
    public function doMagic(): string
    {
        return "Abra-da-cabra from ". self::class . ";<br>";
    }
}

class Magician
{
    use HasMagics;
}

class Witch
{
    use HasMagics;
}

echo (new Magician())->doMagic();
echo (new Witch())->doMagic();

highlight_file(__DIR__ .DIRECTORY_SEPARATOR. 'index.php');