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

declare ( strict_types = 1 );

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
     *
     * @since 0.1.0
     * @access public
     *
     * @return mixed Attribute
     */
    final public function __get( string $attribute ) {
        if ( ! \property_exists( \get_called_class(), $attribute ) ) {
            throw new \Exception( "$attribute attribute does not exist." );
        }

        if ( ! \in_array( $attribute, $this->gettables() ) ) {
            throw new \Exception( "Getting $attribute attribute is not allowed." );
        }

        return $this->$attribute;
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
    abstract protected function gettables(): array;
}
