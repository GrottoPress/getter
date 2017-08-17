<?php

/**
 * Getter tests
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

use PHPUnit\Framework\TestCase;
use GrottoPress\Getter\Getter;

/**
 * Getter test case
 *
 * @since 0.1.1
 */
class Getter_Test extends TestCase {
    private $att_1;
    private $att_2;
    private $att_3;

    private $example_class;

    public function setUp() {
        $this->att_1 = 'Hello'; // same as in our example class
        $this->att_2 = '44street'; // same as in our example class
        $this->att_3 = 'Hey!'; // same as in our example class

        $this->example_class = new Example_Class();

        parent::setUp();
    }

    public function test_getting_allowed_atts_returns_values() {
		$this->assertSame( $this->example_class->att_1, $this->att_1 );
        $this->assertSame( $this->example_class->att_2, $this->att_2 );
	}

    public function test_getting_disallowed_atts_returns_exception() {
        $this->expectException( \Exception::class );
        $this->example_class->att_3;
    }

    public function test_getting_non_existent_atts_returns_exception() {
        $this->expectException( \Exception::class );
        $this->example_class->att_45;
    }
}
