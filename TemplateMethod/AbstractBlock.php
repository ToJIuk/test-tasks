<?php

namespace TemplateMethod;

use OOP\Block;

class AbstractBlock extends Block
{
    private $prefix = '';
    private $postfix = '';

    public function templateMethod()
    {
        if ($this->prefix != '') echo '<div>' . $this->prefix . '</div>';
        $this->render();
        if ($this->postfix != '') echo '<div>' . $this->postfix . '</div>';
    }

    public function render()
    {
        echo '<div>' . $this->getData() . '</div>';
    }

    public function addPrefix($prefix)
    {
        $this->prefix = $prefix;
    }

    public function addPostfix($postfix)
    {
        $this->postfix = $postfix;
    }
}
