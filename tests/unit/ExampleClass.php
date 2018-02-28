<?php

/**
 * Example class
 *
 * We're importing our Getter trait into this class
 * and setting attributes for use by our actual tests.
 *
 * @package GrottoPress\Getter
 *
 * @since 0.1.1
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kusi Adusei (https://twitter.com/akadusei)
 */

declare (strict_types = 1);

namespace GrottoPress\Getter;

/**
 * Example Class
 *
 * @since 0.1.1
 */
class ExampleClass
{
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
}
