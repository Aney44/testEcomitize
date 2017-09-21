<?php

namespace Main\Model;

abstract class EngineVehicle
{
    protected $name;

    public function move()
    {
        $this->showAction('move');
    }

    protected function showAction($action)
    {
        echo $this->getName() . ' ' . $action . "\r\n";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    abstract public function readDocumentation();
}