<?php

namespace OOP;

use OOP\Text;

class TextTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $instance;
    
    protected function _before()
    {
        $this->instance = new Text('hello world!');
    }

    protected function _after()
    {
        $this->instance = null;
    }

    public function testRenderMethod()
    {
        $expectResult = '<p>hello world!</p>';
        $this->expectOutputString($expectResult);
        $this->instance->render();
    }

    public function testRenderCompositeMethod()
    {
        $this->assertEquals(
            'hello world!',
            $this->instance->renderComposite()
        );
    }
}