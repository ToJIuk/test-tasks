<?php

namespace Composite;

use OOP\Text;

class CompositeTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $instance;
    
    protected function _before()
    {
        $this->instance = new Composite();
    }

    protected function _after()
    {
        $this->instance = null;
    }

    public function testAddAndGetChildrenMethods()
    {
        $text = new Text('text');
        $this->instance->add($text, 'test');
        $this->assertEquals($this->instance->getChildren()['test'][0], $text);
    }

    public function testRenderCompositeMethod()
    {
        $text = new Text('text');
        $this->instance->add($text, 'test');
        $result = '<div>text</div>';
        $this->assertEquals($result, $this->instance->renderComposite());
    }

    public function testIsCompositeMethod()
    {
        $this->assertTrue($this->instance->isComposite());
    }
}