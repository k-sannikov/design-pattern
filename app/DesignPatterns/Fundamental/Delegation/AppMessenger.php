<?php

namespace App\DesignPatterns\Fundamental\Delegation;

use App\DesignPatterns\Fundamental\Delegation\Interfaces\MessengerInterface;
use App\DesignPatterns\Fundamental\Delegation\Messengers\EmailMessenger;
use App\DesignPatterns\Fundamental\Delegation\Messengers\SmsMessenger;

/**
 * Class AppMessenger
 *
 * @package App\DesignPatterns\Fundamental\Delegation
 *
 * Демонстрация шаблона проектирования - "Делегирования"
 */
class AppMessenger
{
    /**
     * @var object
     */
    private $messenger;

    /**
     * Выбрать способ отправки - Email
     *
     * @return $this
     */
    public function toEmail()
    {
        $this->messenger = new EmailMessenger();

        return $this->messenger;
    }
    /**
     * Выбрать способ отправки - Sms
     *
     * @return $this
     */
    public function toSms()
    {
        $this->messenger = new SmsMessenger();

        return $this->messenger;
    }
}
