# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/processton-io/processton-card.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-card)
[![Total Downloads](https://img.shields.io/packagist/dt/processton-io/processton-card.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-card)
![GitHub Actions](https://github.com/processton-io/processton-card/actions/workflows/main.yml/badge.svg)

Generate Card Structure For Processton Client

## Installation

You can install the package via composer:

```bash
composer require processton-io/processton-card
```

## Usage
Example
```php
ProcesstonCard::generateCard(
    ProcesstonCard::generateCardHeader(
        'Title',
        'Sub Title',
        'image.com/dummy',
        'icon',
        [
            [
                'label' => 'Action',
                'url' => 'abc.com'
            ]
        ],
        'Some Additional Content Here'
    ),
    ProcesstonCard::generateCardBody(
        'Some Body Context Here',
        [
            [
                'label' => 'Action',
                'url' => 'abc.com'
            ]
        ]
    ),
    ProcesstonCard::generateCardFooter(
        'Some Footer Context Here',
        [
            [
                'label' => 'Action',
                'url' => 'abc.com'
            ]
        ]
    )
);
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmadkokab@gmail.com instead of using the issue tracker.

## Credits

-   [Ahmad Faryab Kokab](https://github.com/processton)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
