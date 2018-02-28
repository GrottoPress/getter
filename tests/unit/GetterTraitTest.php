<?php
declare (strict_types = 1);

namespace GrottoPress\Getter;

use Codeception\Test\Unit;
use Exception;
use Error;

class GetterTraitTest extends Unit
{
    /**
     * @var object
     */
    private $object;

    protected function _before()
    {
        $this->object = new class {
            use GetterTrait;

            private $canGet;
            private $cannotGet;

            public function __construct()
            {
                $this->canGet = 'hello';
            }

            private function getCanGet(): string
            {
                return $this->canGet;
            }
        };
    }

    public function testGettingPrivateAttributeWithPrivateGetterMethodWorks()
    {
        $this->assertSame('hello', $this->object->canGet);
    }

    public function testGettingPrivateAttributeWithNoGetterMethodReturnsError()
    {
        $this->expectException(Error::class);
        $this->object->cannotGet;
    }

    public function testGettingNonExistentAtrributeReturnsException()
    {
        $this->expectException(Exception::class);
        $this->object->nonExistent;
    }
}
