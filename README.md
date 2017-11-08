# Getter

## Description

*Getter* allows you to get **private** object attributes directly, without calling getter methods.

For example, instead of calling `$myObject->getMyAttr()`, you can just do `$myObject->myAttr`. Under the hood, *Getter* gets your attribute by calling a private `getMyAttr()` method that you define in your class.

This way, you get the benefit of syntactic sugar, while still maintaining encapsulation.

## Usage

Install via composer:

`composer require grottopress/getter`

*Getter* is a trait, so you need to import it into your class to use it:

    <?php
    declare (strict_types = 1);

    use GrottoPress\Getter\Getter;

    class MyClass
    {
        /**
         * Import getter
         */
        use Getter;

        private $haveMe;
        private $leaveMeAlone;

        public function __construct()
        {
            $this->haveMe = 'hello';
            $this->leaveMeAlone = 'Go away!';
        }

        /**
         * Define your private getter method
         * Method name should be of the format "get{$attrName}"
         */
        private function getHaveMe(): string
        {
            return $this->HaveMe;
        }

        ...
    }

    // Instantiate
    $object = new MyClass();

    // Try to get attributes
    echo $object->haveMe; // Hello
    echo $object->leaveMeAlone; // Error: getLeaveMeAlone() not defined
    echo $object->nonExistent; // Exception: Does not exist
