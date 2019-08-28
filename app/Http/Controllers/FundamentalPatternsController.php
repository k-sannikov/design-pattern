<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost;

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
}
