<?php

namespace App\DesignPatterns\Fundamental\Delegation\Interfaces;

/**
 * Interface MessengersInterface
 *
 * @package App\DesignPatterns\Fundamental\Delegation\Interfaces
 */
interface MessengerInterface
{
    /**
     * Назначить отправителя
     *
     * @param string $value отправитель
     *
     * @return mixed
     */
    public function setSender($value);

    /**
     * Назначить получателя
     *
     * @param string $value получатель
     *
     * @return mixed
     */
    public function setRecipient($value);

    /**
     * Назначить текст сообщения
     *
     * @param string $value текст сообщения
     *
     * @return mixed
     */
    public function setMessage($value);

    /**
     * Отправка сообщения
     *
     * @return boolean
     */
    public function send(): bool;
}
