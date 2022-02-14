<?php

namespace Composite;

/**
 * Элемент fieldset представляет собой Конкретный Контейнер.
 */
class Fieldset extends FieldComposite
{
    public function render(): string
    {
        // Обратите внимание, как комбинированный результат рендеринга потомков
        // включается в тег fieldset.
        $output = parent::render();

        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}