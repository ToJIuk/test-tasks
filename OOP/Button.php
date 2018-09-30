<?php

namespace OOP;


class Button extends Block
{
    private $arg;

    public function __construct($data, array $arg = [])
    {
        parent::__construct($data);
        $this->arg = $arg;
    }

    public function render()
    {
        echo '<button';
        foreach ($this->arg as $key => $value) {
            echo ' ' . $key . '="' . $value . '"';
        }
        echo '>' . $this->data . '</button>';
    }

    public function renderComposite()
    {
        return '<button>' . $this->getData() . '</button>';
    }
}
