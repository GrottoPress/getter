# Getter

## Description

*Getter* allows you to get **private** object attributes directly, without calling getter methods.

For example, instead of calling `$myObject->getMyAttr()`, you can just do `$myObject->myAttr`. Under the hood, *Getter* gets your attribute by calling a private `getMyAttr()` method that you define in your class.

This way, you get the benefit of syntactic sugar, while maintaining encapsulation.

## Installation

Install via composer: `composer require grottopress/getter`

## Usage

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
        $this->haveMe = 'Hello :-)';
        $this->leaveMeAlone = 'Go away!';
    }

    /**
     * Define your private getter method
     * Method name should be of the format "get{$attrName}"
     */
    private function getHaveMe(): string
    {
        return $this->haveMe;
    }

    // ...
}

// Instantiate
$object = new Vendor\MyClass();

// Try to get attributes
echo $object->haveMe; // => Hello :-)
echo $object->leaveMeAlone; // => Error: 'getLeaveMeAlone()' not defined
echo $object->nonExistent; // => Exception: 'nonExistent' does not exist
```

## Development

Run tests with `composer run test`.

## Contributing

1. [Fork it](https://github.com/GrottoPress/getter/fork)
1. Switch to the `master` branch: `git checkout master`
1. Create your feature branch: `git checkout -b my-new-feature`
1. Make your changes, updating changelog and documentation as appropriate.
1. Commit your changes: `git commit`
1. Push to the branch: `git push origin my-new-feature`
1. Submit a new *Pull Request* against the `GrottoPress:master` branch.
