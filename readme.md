# features [![Build Status](https://travis-ci.org/frozzare/php-features.svg?branch=master)](https://travis-ci.org/frozzare/php-features)

Simple package for feature flagging interface/implementation.

## Installation

```
$ composer require frozzare/features
```

## Example

```php
features([
    'log' => false
]);

...

features()->enable('log');

...

if (features()->enabled('log')) {
    ...
}

...

features()->disable('log');
```

## License

MIT © [Fredrik Forsmo](https://github.com/frozzare)
