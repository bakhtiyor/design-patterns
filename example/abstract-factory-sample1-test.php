<?php

use AbstractFactory\Sample1\Page;
use AbstractFactory\Sample1\PHPTemplateFactory;
use AbstractFactory\Sample1\TwigTemplateFactory;

require_once 'vendor/autoload.php';
/**
 * Теперь в других частях приложения клиентский код может принимать фабричные
 * объекты любого типа.
 */
$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());


// Можете убрать комментарии, если у вас установлен Twig.

//echo "Testing rendering with the Twig factory:\n";
//echo $page->render(new TwigTemplateFactory());