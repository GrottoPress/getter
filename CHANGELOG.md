# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Changed
- Made `gettables` method in `Getter` trait an abstract method.

## [0.1.2] - 2017-08-05
### Changed
- Updated test classes to use phpunit version 6

### Fixed
- Fixed wrong return value for callable parameter to `get` method in getter tests

## [0.1.1] - 2017-08-05
### Added
- Set up test suite with [PHPUnit](https://phpunit.de)

### Changed
- Removed check for `trait_exists` in `Getter`.

### Fixed
- Fixed fatal error `Exception` class not found.

## 0.1.0 - 2017-08-05
### Added
- `Getter` trait

[Unreleased]: #
[0.1.2]: https://github.com/grottopress/getter/compare/0.1.1...0.1.2
[0.1.1]: https://github.com/grottopress/getter/compare/0.1.0...0.1.1
