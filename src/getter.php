<?php

/**
 * Getter.
 *
 * Get attributes of an object.
 *
 * @package GrottoPress\Getter
 * @since 0.1.0
 *
 * @author GrottoPress (https://www.grottopress.com)
 * @author N Atta Kus Adusei (https://twitter.com/akadusei)
 */

namespace GrottoPress\Getter;

/**
 * Getter
 *
 * @since 0.1.0
 */
trait Getter {
    /**
     * Get attribute
     *
     * @var string $attribute Name of attribute to get
     * @var callable $validate_callback Callback function to validate attribute
     *
     * @since 0.1.0
     * @access public
     *
     * @return mixed Attribute
     */
    final public function get( $attribute, $validate_callback = null ) {
        if ( ! \property_exists( \get_called_class(), $attribute ) ) {
            throw new \Exception( "$attribute attribute does not exist." );
        }

        if ( ! \in_array( $attribute, ( array ) $this->gettables() ) ) {
            throw new \Exception( "Getting $attribute attribute is not allowed." );
        }

        if ( ! $validate_callback ) {
            return $this->$attribute;
        }

        if ( ! \is_callable( $validate_callback ) ) {
            throw new \Exception( "$validate_callback is not a callable." );
        }

        return \call_user_func( $validate_callback, $this->$attribute );
    }

    /**
     * Gettables
     *
     * Defines the attributes that can be retrieved
     * with our getter.
     *
     * @since 0.1.0
     * @access protected
     *
     * @return array Attributes.
     */
    abstract protected function gettables();
}
