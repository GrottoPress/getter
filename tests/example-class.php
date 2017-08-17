<?php

/**
 * Example class
 *
 * We're importing our Getter trait into this class
 * and setting attributes for use by our actual tests.
 *
 * @package GrottoPress\Getter
 * @subpackage GrottoPress\Getter\Tests
 *
 * @since 0.1.1
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

declare ( strict_types = 1 );

namespace GrottoPress\Getter\Tests;

use GrottoPress\Getter\Getter;

/**
 * Example Class
 *
 * @since 0.1.1
 */
class Example_Class {
    use Getter;

    protected $att_1;
    protected $att_2;
    protected $att_3;

    public function __construct() {
        $this->att_1 = 'Hello';
        $this->att_2 = '44street';
        $this->att_3 = 'Hey!';
    }

    protected function gettables(): array {
        return [ 'att_1', 'att_2' ];
    }
}
