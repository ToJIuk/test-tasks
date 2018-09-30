<?php

namespace Decorator;

class CommentsDecorator extends Decorator
{
    public function render()
    {
        echo '<!-- Block BEGIN. Type: ' . get_class($this->getComponent()) .
            ' ID: ' . spl_object_hash($this->getComponent()) .
            ' Length: ' . strlen($this->getComponent()->getData()) . ' -->';
        parent::render();
        echo '<!-- Block END. Type: ' . get_class($this->getComponent()) .
            ' ID: ' . spl_object_hash($this->getComponent()) .
            ' Length: ' . strlen($this->getComponent()->getData()) . ' -->';
    }
}