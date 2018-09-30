<?php

namespace Strategy;

use OOP\Block;
use Strategy\Interfaces\PluginInterface;

class CommentStrategy implements PluginInterface
{
    private $object;

    public function __construct(Block $obj)
    {
        $this->object = $obj;
    }

    public function render()
    {
        echo '<!-- Block BEGIN. Type: ' . get_class($this->object) .
            ' ID: ' . spl_object_hash($this->object) .
            ' Length: ' . strlen($this->object->getData()) .
            ' Plugin: ' . get_class($this) . ' -->' .
            $this->object->renderComposite() .
            '<!-- Block END. Type: ' . get_class($this->object) .
            ' ID: ' . spl_object_hash($this->object) .
            ' Length: ' . strlen($this->object->getData()) .
            ' Plugin: ' . get_class($this) . ' -->';
    }
}
