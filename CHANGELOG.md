# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2023-05-31

### Added
- First stable release

## [0.4.0] - 2023-04-12

### Added
- Add support for PHP 8

### Changed
- Replace Travis CI with GitHub actions

## 0.3.8 - 2020-02-08

### Added
- Add support for PHP 7.4

## 0.3.7 - 2019-04-17

### Added
- Add `.gitattributes`

## 0.3.6 - 2019-04-16

### Fixed
- Fix composer dependency resolution failures in travis-ci

## 0.3.5 - 2019-04-12

### Changed
- Update documentation

## 0.3.4 - 2018-10-06

### Added
- Add `.editorconfig`

### Changed
- Rename `LICENSE.md` to `LICENSE`

## 0.3.3 - 2018-03-03

### Removed
- `final` keyword from `__get()` method definiton

## 0.3.2 - 2018-03-01

### Removed
- Redundant doc blocks in code

## 0.3.1 - 2018-02-28

### Added
- [Travis-CI](https://travis-ci.org/GrottoPress/getter) setup
- `.security.txt`

## 0.3.0 - 2018-02-28

### Added
- Release binary

### Changed
- Rename Getter trait to `GetterTrait`

## 0.2.1 - 2017-11-25

### Changed
- Minor code improvements

## 0.2.0 - 2017-11-09

### Changed
- Compliant with [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/) and [PSR-4](http://www.php-fig.org/psr/psr-4/)
- Replaced PHP Unit with Codeception for testing
- Allowed getting attribute directly instead of via getter method call.

### Removed
- Removed PHP 5 support: Requires PHP version 7.0 or newer.

## 0.1.3 - 2017-08-08

### Added
- Added CHANGELOG.md

### Changed
- Made `gettables` method in `Getter` trait an abstract method.
- Ensure `gettables` method call returns array.

## 0.1.2 - 2017-08-05

### Changed
- Updated test classes to use phpunit version 6

### Fixed
- Fixed wrong return value for callable parameter to `get` method in getter tests

## 0.1.1 - 2017-08-05

### Added
- Set up test suite with [PHPUnit](https://phpunit.de)

### Changed
- Removed check for `trait_exists` in `Getter`.

### Fixed
- Fixed fatal error `Exception` class not found.

## 0.1.0 - 2017-08-05

### Added
- `Getter` trait
