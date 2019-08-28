<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

use App\DesignPatterns\Fundamental\PropertyContainer\Interfaces\PropertyContainerInterface;

/**
 * Class propertyContainer
 *
 * @package App\DesignPatterns\Fundamental\PropertyContainer
 */
class PropertyContainer implements PropertyContainerInterface
// trait PropertyContainer
{
    /**
     * @var array $propertyContainer контейнер свойств
     */
    private $propertyContainer = [];

    /**
     * Добавить свойство
     *
     * @param string $propertyName имя свойстава
     * @param mixed $value значение свойства
     *
     * @return mixed
     */
    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * Удалить свойство
     *
     * @param string $propertyName имя свойстава
     *
     * @return mixed
     */
    function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * Получить свойство
     *
     * @param string $propertyName имя свойстава
     *
     * @return mixed
     */
    function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * Назначить свойству значение
     *
     * @param string $propertyName имя свойстава
     * @param mixed $value значение свойства
     *
     * @return mixed
     */
    function setProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}


