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
		$this->assertEquals( $this->example_class->get( 'att_1' ), $this->att_1 );
        $this->assertEquals( $this->example_class->get( 'att_2' ), $this->att_2 );
	}

    public function test_using_valid_callback_returns_values() {
        $this->assertEquals( $this->example_class->get( 'att_1', function ( $value ) {
            return $value;
        } ), $this->att_1 );
        
        $this->assertEquals( $this->example_class->get( 'att_2', 'intval' ), \intval( $this->att_2 ) );
    }

    public function test_getting_disallowed_atts_returns_exception() {
        $this->expectException( \Exception::class );
        $this->example_class->get( 'att_3' );
    }

    public function test_getting_invalid_atts_returns_exception() {
        $this->expectException( \Exception::class );
        $this->example_class->get( 'att 22' );
    }

    public function test_using_invalid_callback_returns_exception() {
        $this->expectException( \Exception::class );
        $this->example_class->get( 'att_1', 'invalid_callback' );
    }
}
