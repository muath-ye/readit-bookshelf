<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Readit

Readit Bookshelf is a Laravel Bookshelf App Built with Nova and Vuejs

## Installation

Clone the project

```sh
git clone git@github.com:muath-ye/readit-bookshelf.git
```

Enter the project

```sh
cd readit-bookshelf
```

Copy your `nova` to the root directory of the project then install composer packages

```sh
composer install
```

Install npm packages using `npm` or `yarn`

```sh
npm install
```

Compile assets using `npm` or `yarn`

```sh
npm run dev
```

Create a database `readit` and migrate the tables with seeders

```sh
php artisan migrate --seed
```

Run the project

```sh
php artian serve
```

Visit [http://127.0.0.1:8000](127.0.0.1:8000)

To Visit the dashboard [http://127.0.0.1:8000/nove/login](127.0.0.1:8000/nove/login)

Enter user name and password as following if you choose default credentianls while seed

> email: `info@muathye.com`
> password: `password`

## Landing Page

![Read it Bookshelf Landing Page](/docs/landing-page.png)

## Dashboard

![Read it Bookshelf Dashboard Page](/docs/dashboard-page.png)
![Read it Bookshelf Dashboard Book Page](/docs/dashboard-books-page.png)
![Read it Bookshelf Dashboard Users Edit Page](/docs/dashboard-users-1-edit.png)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
