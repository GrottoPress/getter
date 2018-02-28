# Getter

## Description

*Getter* allows you to get **private** object attributes directly, without calling getter methods.

For example, instead of calling `$myObject->getMyAttr()`, you can just do `$myObject->myAttr`. Under the hood, *Getter* gets your attribute by calling a private `getMyAttr()` method that you define in your class.

This way, you get the benefit of syntactic sugar, while maintaining encapsulation.

## Usage

Install via composer:

`composer require grottopress/getter`

Import trait into your class, and use thus:

```php
<?php
declare (strict_types = 1);

namespace Vendor;

use GrottoPress\Getter\GetterTrait;

class MyClass
{
    /**
     * Import trait
     */
    use GetterTrait;

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

    // ...
}

// Instantiate
$object = new MyClass();

// Try to get attributes
echo $object->haveMe; // hello
echo $object->leaveMeAlone; // Error: 'getLeaveMeAlone()' not defined
echo $object->nonExistent; // Exception: 'nonExistent' does not exist
```
