<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost;
use App\DesignPatterns\Fundamental\Delegation\AppMessenger;

class FundamentalPatternsController extends Controller
{
    /**
     * Контейнер свойств (англ. property container)
     *
     * @url http://design-pattern.local/fundamentals/property-container
     *
     * @return \Illuminate\Contracts\View\Factiry|\Illuminate\View\View
     * @throws \Exception
     **/
    public function propertyContainer()
    {
        $item = new BlogPost();

        $item->setTitle('Заголовок 1');
        $item->setCategory('10');

        $item->addProperty('view_count', 100);

        $item->addProperty('last_update', '2030-02-01');
        $item->setProperty('last_update', '2031-22-22');

        $item->addProperty('read_only', true);
        $item->deleteProperty('read_only');

        dd($item);
    }

    /**
     * Делегирование (англ. Delegetion)
     *
     * @url http://design-pattern.local/fundamentals/delegation
     *
     * @return \Illuminate\Contracts\View\Factiry|\Illuminate\View\View
     * @throws \Exception
     **/
    public function delegation()
    {
        $item = new AppMessenger();

        $item->toEmail()
            ->setSender('sender@mail.com')
            ->setRecipient('recipient@mail.com')
            ->setMessage('Hello Email messenger!')
            ->send();

        dump($item);

        $item->toSms()
            ->setSender('88005553535')
            ->setRecipient('88003336679')
            ->setMessage('Hello Sms messenger!')
            ->send();

        dump($item);
    }
}
