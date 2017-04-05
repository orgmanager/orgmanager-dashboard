# OrgManager component for [Spatie's Dashboard](https://github.com/spatie/dashboard.spatie.be)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/orgmanager/orgmanager-dashboard.svg?style=flat-square)](https://packagist.org/packages/orgmanager/orgmanager-dashboard)
[![Software License](https://img.shields.io/badge/license-AGPLv3-blue.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/orgmanager/orgmanager-dashboard.svg?style=flat-square)](https://packagist.org/packages/orgmanager/orgmanager-dashboard)

This package adds an OrgManager Statistics tile similar to the Packagist Statistics to [Spatie's Dashboard](https://github.com/spatie/dashboard.spatie.be).

## Installation

You can install this package via composer using this command:

``` bash
composer require orgmanager/orgmanager-dashboard
```
Next, you must install the service provider:

``` php
// config/app.php
'providers' => [
    ...
    OrgManager\Dashboard\OrgManagerDashboardServiceProvider::class,
];
```
then, publish the assets&config using this command:

``` bash
php artisan vendor:publish --tag=orgmanager-dashboard/assets --force
php artisan vendor:publish --tag=orgmanager-dashboard/config --force
php artisan vendor:publish --tag=orgmanager-dashboard/commands --force
```

you also have to add your OrgManager token to the `.env` file

```
// .env
...
ORGMANAGER_TOKEN=your-token-here
...
```
Finally, re-generate assets:

``` bash
yarn && yarn run dev
```

## Preview

![Preview](https://cloud.githubusercontent.com/assets/23558090/23669580/fbee62f8-0364-11e7-9e88-003c4c6dd6af.png)

## Changelog

Please see [CHANGELOG.md](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Read our [CONTRIBUTING.md](CONTRIBUTING.md) for more details on how to help us.

## Security

If you find any security related issues, please send an email to soy@miguelpiedrafita.com instead of using the issue tracker.

## Credits

- [Miguel Piedrafita](https://github.com/m1guelpf)
- [All Contributors](../../contributors)

## License

This package is licensed under the Mozilla Public License ("MPL"). Please see [LICENSE.md](LICENSE.md) for more information.
