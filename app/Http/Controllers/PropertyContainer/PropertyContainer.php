<?php


namespace App\Http\Controllers\PropertyContainer;


class PropertyContainer implements PropertyContainerInterface
{

    private $propertyContainer = [];

    function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    function deleteProperty($propertyName)
    {
       unset($this->propertyContainer[$propertyName]);
    }

    function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    function setProperty($propertyName, $value)
    {
        if(!isset($this->propertyContainer[$propertyName])) {
            throw new \Exception("Property [{$propertyName}] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}
