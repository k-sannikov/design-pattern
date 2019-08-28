<?php

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;

/**
 * Class EmailMessenger
 *
 * @package App\DesignPatterns\Fundamental\Delegation\Messengers
 */
class SmsMessenger extends AbstractMessenger
{
    /**
     * Отправка сообщения
     *
     * @return boolean
     **/
    public function send(): bool
    {
        dump('Sent by ' . __METHOD__);

        return parent::send();
    }
}

