<?php

namespace OOP;

class ButtonTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $instance;

    protected function _before()
    {
        $this->instance = new Button('Enter', ['type' => 'submit']);
    }

    protected function _after()
    {
        $this->instance = null;
    }

    public function testRenderMethod()
    {
        $expectResult = '<button type="submit">Enter</button>';
        $this->expectOutputString($expectResult);
        $this->instance->render();
    }

    public function testRenderCompositeMethod()
    {
        $this->assertEquals(
            '<button>Enter</button>',
            $this->instance->renderComposite()
        );
    }
}