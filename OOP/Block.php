<?php

namespace OOP;


abstract class Block
{
    protected $data;

    public function __construct($data = '')
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    abstract public function render();

    public function getChildren()
    {
        return false;
    }

    public function renderComposite() {}

    public function isComposite()
    {
        return false;
    }
}
