<?php

namespace OOP;


class Image extends Block
{
    private $arg;

    public function __construct($data, array $arg = [])
    {
        parent::__construct($data);
        $this->arg = $arg;
    }

    public function render()
    {
        echo '<image src="' . $this->data . '"';
        foreach ($this->arg as $key => $value) {
            echo ' ' . $key . '="' . $value . '"';
        }
        echo '>';
    }

    public function renderComposite()
    {
        return '<image src="' . $this->getData() . '" width="50px">';
    }
}
