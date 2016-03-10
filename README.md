![heap](https://cloud.githubusercontent.com/assets/11269635/13665972/69637e6e-e6af-11e5-970e-dbbd1800978a.jpg)

# Heap

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Heap is a handy way of interacting with arrays in PHP. This package provides
you with an easy to understand API and a much needed break from the mess
that is PHP's built-in array functions.

## Installation
Install this package via composer:

``` bash
$ composer require sven/heap
```

Alternatively, add the package to your dependencies in your `composer.json` file
and run `composer update`:

```json
{
    "require": {
        "sven/heap": "^1.0"
    }
}
```

## Usage
``` php
# New up an instance of the class.
$heap = new Sven\Heap\Heap;

# You can also pass in an array to push to the heap.
$heap = new Sven\Heap\Heap(['foo', 'bar', 'baz']);
```

```php
# Push an item into the heap.
$heap->push('foo');
$heap->all(); // ['foo']
```

```php
# Merge an existing array into the heap.
$heap->merge(['fizz', 'baz']);
$heap->all(); // ['foo', 'fizz', 'baz']
```

```php
# Get the first or last item from the heap.
$heap->first(); // 'foo'
$heap->last(); // 'baz'

# Get the first or last `n` items from the heap.
$heap->first(2); // ['foo', 'fizz']
$heap->last(2); // ['fizz', 'baz']
```

```php
# Pre- or append an item to the heap.
$heap->prepend('bar');
$heap->all(); // ['bar', 'foo', 'fizz', 'baz']

$heap->append('buzz');
$heap->all(); // ['bar', 'foo', 'fizz', 'baz', 'buzz']
```

```php
$heap->random(); // 'baz' (retrieved randomly)
```

```php
# Empty the entire array.
$heap->nuke();
$heap->all(); // []
```

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email <svenluijten@outlook.com>
instead of using the issue tracker.

## Credits

- [Sven Luijten][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/heap.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/svenluijten/heap/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/heap.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/sven/heap
[link-travis]: https://travis-ci.org/svenluijten/heap
[link-downloads]: https://packagist.org/packages/sven/heap
[link-author]: https://github.com/svenluijten
[link-contributors]: ../../contributors
