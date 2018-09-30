<?php

namespace OOP;

class ImageTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $instance;

    protected function _before()
    {
        $this->instance = new Image('img/cat.jpg', ['width' => '50px']);
    }

    protected function _after()
    {
        $this->instance = null;
    }

    public function testRenderMethod()
    {
        $expectResult = '<image src="img/cat.jpg" width="50px">';
        $this->expectOutputString($expectResult);
        $this->instance->render();
    }

    public function testRenderCompositeMethod()
    {
        $this->assertEquals(
            '<image src="img/cat.jpg" width="50px">',
            $this->instance->renderComposite()
        );
    }
}