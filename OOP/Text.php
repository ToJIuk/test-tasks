<?php

namespace OOP;


class Text extends Block
{
    public function render()
    {
        echo '<p>' . $this->data . '</p>';
    }

    public function renderComposite()
    {
        return $this->getData();
    }
}
