<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Architecture Testing

This repository demonstrates Laravel architecture testing using [Pest](https://pestphp.com/).

For more details, reference the official documentation: [https://pestphp.com/docs/arch-testing](https://pestphp.com/docs/arch-testing)

### Architecture Testing

Architecture testing enables you to specify expectations that test whether your application adheres to a set of architectural rules, helping you maintain a clean and sustainable codebase. The expectations are determined by either relative namespaces, fully qualified namespaces, or function names.

Here is an example of how you can define an architectural rule:

```php
arch()
    ->expect('App')
    ->toUseStrictTypes()
    ->not->toUse(['die', 'dd', 'dump']);

arch()
    ->expect('App\Models')
    ->toBeClasses()
    ->toExtend('Illuminate\Database\Eloquent\Model')
    ->toOnlyBeUsedIn('App\Repositories')
    ->ignoring('App\Models\User');

arch()
    ->expect('App\Http')
    ->toOnlyBeUsedIn('App\Http');

arch()
    ->expect('App\*\Traits')
    ->toBeTraits();

arch()->preset()->php();
arch()->preset()->security()->ignoring('md5');
```
