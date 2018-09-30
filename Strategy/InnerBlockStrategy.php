<?php

namespace Strategy;

use OOP\Block;
use Strategy\Interfaces\PluginInterface;

class InnerBlockStrategy implements PluginInterface
{
    private $object;
    private $inner;

    public function __construct(Block $obj, Block $inner)
    {
        $this->object = $obj;
        $this->inner = $inner;
    }

    public function render()
    {
        echo '<div>' .
            $this->inner->renderComposite() .
            $this->object->renderComposite() .
            $this->inner->renderComposite() .
            '</div>';
    }
}
