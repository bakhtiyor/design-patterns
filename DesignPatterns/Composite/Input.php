<?php

namespace Composite;

/**
 * Это компонент-Лист. Как и все Листья, он не может иметь вложенных
 * компонентов.
 */
class Input extends FormElement
{
    private $type;

    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name, $title);
        $this->type = $type;
    }

    /**
     * Поскольку у компонентов-Листьев нет вложенных компонентов, которые могут
     * выполнять за них основную часть работы, обычно Листья делают большую
     * часть тяжёлой работы внутри паттерна Компоновщик.
     */
    public function render(): string
    {
        return "<label for=\"{$this->name}\">{$this->title}</label>\n" .
            "<input name=\"{$this->name}\" type=\"{$this->type}\" value=\"{$this->data}\">\n";
    }
}