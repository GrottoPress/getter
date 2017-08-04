# Getter

* Author: [@GrottoPress](https://github.com/grottopress)
* Author Website: [https://www.grottopress.com](https://www.grottopress.com)
* Contributor(s): [@akadusei](https://github.com/akadusei)
* License: [GNU General Public License v2.0 or later](http://www.gnu.org/licenses/gpl-2.0.html)

## Description

*Getter* is a simple library to get object attributes.

## Usage

Install via composer:

`composer require grottopress/getter`

Getter is a trait, so you need to import into your class to use it:

    <?php

    use GrottoPress\WordPress\Getter\Getter;

    class My_Class {
        // Import getter
        use Getter;

        protected $att_1 = 'Hello';
        protected $att_2 = '4';
        protected $att_3 = 'Hey!';

        // Set your gettable attributes here
        protected function gettables() {
            return [ 'att_1', 'att_2' ];
        }

        ...
    }

    // Instantiate
    $object = new My_Class();

    // Try to get attributes
    echo $object->get( 'att_1' ); // Hello
    echo $object->get( 'att_2', 'intval' ); // 4
    echo $object->get( 'att_3' ); // Error
