<?php
declare (strict_types = 1);

namespace GrottoPress\Getter;

use Codeception\Test\Unit;
use Exception;
use Error;

class GetterTest extends Unit
{
    /**
     * @var string
     */
    private $attribute;

    /**
     * @var ExampleClass
     */
    private $example;

    protected function _before()
    {
        $this->attribute = 'hello'; // Should be same as in ExampleClass
        $this->example = new ExampleClass();
    }

    public function testGetPrivateAttributeWithPrivateGetterMethodWorks()
    {
        $this->assertSame($this->attribute, $this->example->canGet);
    }

    public function testGetPrivateAttributeWithNoGetterMethodReturnsError()
    {
        $this->expectException(Error::class);
        $this->example->cannotGet;
    }

    public function testGetNonExistentAtrributeReturnsException()
    {
        $this->expectException(Exception::class);
        $this->example->nonExistent;
    }
}
