# Getter

## Description

*Getter* is a simple library to get object attributes.

## Usage

Install via composer:

`composer require grottopress/getter`

*Getter* is a trait, so you need to import into your class to use it:

    <?php

    declare ( strict_types = 1 );

    use GrottoPress\WordPress\Getter\Getter;

    class My_Class {
        // Import getter
        use Getter;

        protected $att_1 = 'Hello';
        protected $att_2 = 4;
        protected $att_3 = 'Hey!';

        // Set your gettable attributes here
        protected function gettables(): array {
            return [ 'att_1', 'att_2' ];
        }

        ...
    }

    // Instantiate
    $object = new My_Class();

    // Try to get attributes
    echo $object->att_1; // Hello
    echo $object->att_2; // 4
    echo $object->att_3; // Error: Not gettable
    echo $object->att_4; // Error: Does not exist
