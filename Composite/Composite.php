<?php

namespace Composite;

use OOP\Block;

class Composite extends Block
{
    public $children;

    public function add(Block $block, $namespace)
    {
        $this->children[$namespace][] = $block;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function renderComposite()
    {
        $result = '<div>';
        foreach ($this->children as $key => $child) {
            $result .= $this->renderPlaceholder($key);
        }
        return $result . '</div>';
    }

    protected function renderPlaceholder($namespace)
    {
        $result = '';
        foreach ($this->children[$namespace] as $child) {
            $result .= $child->renderComposite();
        }
        return $result;
    }

    public function getStructure($a = '')
    {
        foreach ($this->children as $key => $value) {
            foreach ($this->children[$key] as $child) {
                if (!$child->isComposite()) echo ($a .= '-') . get_class($child) . '<br>';
                else $child->getStructure($a);
            }
        }
    }

    public function isComposite()
    {
        return true;
    }

    public function render(){}
}
