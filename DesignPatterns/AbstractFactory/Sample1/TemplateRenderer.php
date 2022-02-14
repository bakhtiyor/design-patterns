<?php

namespace AbstractFactory\Sample1;

/**
 * Классы отрисовки отвечают за преобразовании строк шаблонов в конечный HTML
 * код. Каждый такой класс устроен по-раному и ожидает на входе шаблоны только
 * своего типа. Работа с шаблонами через фабрику позволяет вам избавиться от
 * риска подать в отрисовщик шаблон не того типа.
 */
interface TemplateRenderer
{
    public function render(string $templateString, array $arguments = []): string;
}