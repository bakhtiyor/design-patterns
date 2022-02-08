<?php

namespace Adapter\Sample1;

/**
 * Вот пример существующего класса, который следует за целевым интерфейсом.
 *
 * Дело в том, что у большинства приложений нет чётко определённого интерфейса.
 * В этом случае лучше было бы расширить Адаптер за счёт существующего класса
 * приложения. Если это неудобно (например, SlackNotification не похож на
 * подкласс EmailNotification), тогда первым шагом должно быть извлечение
 * интерфейса.
 */
class EmailNotification implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message): void
    {
        mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}