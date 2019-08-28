<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer\Interfaces;

/**
 * Interface PropertyContainerInterface
 */
interface PropertyContainerInterface
{
    /**
     * Добавить свойство
     *
     * @param string $propertyName имя свойстава
     * @param mixed $value значение свойства
     *
     * @return mixed
     */
    function addProperty($propertyName, $value);

    /**
     * Удалить свойство
     *
     * @param string $propertyName имя свойстава
     *
     * @return mixed
     */
    function deleteProperty($propertyName);

    /**
     * Получить свойство
     *
     * @param string $propertyName имя свойстава
     *
     * @return mixed
     */
    function getProperty($propertyName);

    /**
     * Назначить свойству значение
     *
     * @param string $propertyName имя свойстава
     * @param mixed $value значение свойства
     *
     * @return mixed
     */
    function setProperty($propertyName, $value);
}
