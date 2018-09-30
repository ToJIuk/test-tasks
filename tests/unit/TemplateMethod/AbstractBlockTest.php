<?php namespace TemplateMethod;

class AbstractBlockTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $instance;
    
    protected function _before()
    {
        $this->instance = new AbstractBlock('Hello world!');
    }

    protected function _after()
    {
        $this->instance = null;
    }

    public function testRenderMethod()
    {
        $this->expectOutputString('<div>Hello world!</div>');
        $this->instance->render();
    }

    public function testTemplateMethod()
    {
        $this->instance->addPrefix('prefix');
        $this->instance->addPostfix('postfix');
        $expect = '<div>prefix</div><div>Hello world!</div><div>postfix</div>';
        $this->expectOutputString($expect);
        $this->instance->templateMethod();
    }
}
