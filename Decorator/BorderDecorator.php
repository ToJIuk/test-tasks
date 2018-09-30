<?php

namespace Decorator;


use OOP\Block;

class BorderDecorator extends Decorator
{
    private $px;
    private $color;

    public function __construct(Block $block, $px = 1, $color = 'black')
    {
        parent::__construct($block);
        $this->px = $px;
        $this->color = $color;
    }

    public function render()
    {
        echo '<div style="border: ' . $this->px . 'px solid ' . $this->color . '">';
        parent::render();
        echo '</div>';
    }
}