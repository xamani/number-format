# The Laravel Nova Number Format Field

With this package, you can display and enter numbers in the field in a format.

using the [numeral.js](http://numeraljs.com/) library.
## Installation

You can install the package via composer:

```bash
composer require xamani/number-format
```

## Usage

```php
use Xamani\NumberFormat;

NumberFormat::make('Price')
    ->format('0,0')   // Defaults to "0,0"
```

## License

The MIT License (MIT).
