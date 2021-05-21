<?php


abstract class Printer
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract function print($message);

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}