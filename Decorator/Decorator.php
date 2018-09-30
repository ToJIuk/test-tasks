<?php

namespace Decorator;

use OOP\Block;

abstract class Decorator
{
    private $component;

    public function __construct(Block $block)
    {
        $this->component = $block;
    }

    protected function getComponent()
    {
        return $this->component;
    }

    public function render()
    {
        $this->getComponent()->render();
    }
}
