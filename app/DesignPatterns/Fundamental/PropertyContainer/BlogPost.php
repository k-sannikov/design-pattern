<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

// use App\DesignPatterns\Fundamental\PropertyContainer\PropertyContainer;

/**
 * Class BlogPost
 * @package App\DesignPatterns\Fundamental\PropertyContainer
 */
class BlogPost extends PropertyContainer
// class BlogPost
{
    // use PropertyContainer;
    /**
     * @var string $title заголовок
     */
    private $title;

    /**
     * @var integer $category_id id категории
     */
    private $category_id;

    /**
     * Получить заголовок
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Назначить заголовок
     *
     * @param string $title заголовок
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Получить категорию
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category_id;
    }

    /**
     * Назначить категорию
     *
     * @param string $id id категории
     */
    public function setCategory($id)
    {
        $this->category_id = $id;
    }
}
