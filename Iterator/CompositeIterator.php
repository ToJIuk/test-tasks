<?php

namespace Iterator;

use Composite\Composite;

class CompositeIterator implements \Iterator
{
    protected $position = 0;
    protected $namespace;
    protected $object;
    protected $currentElement = null;
    protected static $level = 0;

    public function __construct(Composite $composite)
    {
        $this->object = $composite;
        $this->namespace = key($this->object->getChildren());
    }

    public function current()
    {
        $this->currentElement = $this->object->getChildren()[$this->namespace][$this->position];
        return $this->currentElement;
    }

    public function getLevel()
    {
        return static::$level;
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        if (isset($this->object->getChildren()[$this->namespace][$this->position])) {
            return true;
        }
        static::$level--;
        return false;
    }

    public function rewind()
    {
        $this->position = 0;
        static::$level++;
    }

    public function recursive($arr = 0, &$count = 0, $level = 0)
    {
        $arr = is_object($arr) ? $arr : $this;
        foreach ($arr as $key => $value) {
            $class = get_class($value);
            if ($class == Composite::class) {
                $namespace = key($value->getChildren());
                $arr = $value->getChildren()[$namespace];
                foreach ($arr as $k => $a) {
                    $comp = new Composite();
                    $comp->add($a, $namespace);
                    $this->recursive(new CompositeIterator($comp), $count, $level);
                }
            } else {
//                echo $count++ . get_class($value) . $this->getLevel() . '<br>';
                if ($this->getLevel() == $level or $level == 0) {
                    echo $count++ . ') ' . get_class($value) . ' level: ' . $this->getLevel() . '<br>';
                }
            }
        }

    }

    public function byLevel($level)
    {
        self::$level=0;
        $c = $arr = 0;
        $this->recursive($arr, $c, $level);
    }
}
