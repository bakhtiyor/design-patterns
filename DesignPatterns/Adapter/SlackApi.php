<?php

namespace Adapter;

/**
 * Адаптируемый класс – некий полезный класс, несовместимый с целевым
 * интерфейсом. Нельзя просто войти и изменить код класса так, чтобы следовать
 * целевому интерфейсу, так как код может предоставляться сторонней библиотекой.
 */
class SlackApi
{
    private $login;
    private $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account '{$this->login}'.\n";
    }

    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}