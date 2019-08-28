<?php

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;

use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;

/**
 * Class AbstractMessenger
 *
 * @package App\DesignPatterns\Fundamental\Delegation\Messengers
 */
abstract class AbstractMessenger implements MessengerInterface
{
    /**
     * Отправитель
     *
     * @var string
     */
    protected $sender;

    /**
     * Получатель
     *
     * @var string
     */
    protected $recipient;

    /**
     * Текст сообщения
     *
     * @var string
     */
    protected $message;

    /**
     * Назначить отправителя
     *
     * @param string $value отправитель
     *
     * @return mixed
     */
    public function setSender($value)
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * Назначить получателя
     *
     * @param string $value получатель
     *
     * @return mixed
     */
    public function setRecipient($value)
    {
        $this->recipient = $value;

        return $this;
    }

    /**
     * Назначить текст сообщения
     *
     * @param string $value текст сообщения
     *
     * @return mixed
     */
    public function setMessage($value)
    {
        $this->message = $value;

        return $this;
    }

    /**
     * Отправка сообщения
     *
     * @return boolean
     */
    public function send(): bool
    {
        return true;
    }
}
