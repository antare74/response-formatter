<p align="center">
  <a href="" rel="noopener">
 <img width=200px height=200px style="border-radius:50%" src="https://avatars.githubusercontent.com/u/52792087?v=4" alt="Project logo"></a>
</p>

<h3 align="center">Laravel Response Formatter</h3>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/antare74/response-formatter.svg)](https://github.com/antare74/response-formatter/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/antare74/response-formatter.svg)](https://github.com/antare74/response-formatter/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center"> I created this package to make it easier to format the response from a controller. I have used this package in my projects and I hope you enjoy it!</p>
    <br> 
</p>

## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Usage](#usage)
- [Contributing](../CONTRIBUTING.md)
- [Authors](#authors)
- [Acknowledgments](#acknowledgement)

## 🧐 About <a name = "about"></a>
It is a simple package that allows you to format your response in a consistent way. This might be useful for your API, or for your front-end.
## 🏁 Getting Started <a name = "getting_started"></a>

These instructions will help you get started with your project.

### Prerequisites

What things you need to install the software and how to install them.

```
composer
```
```
Laravel Version: >= 5.8
```

### Installing

A step by step series of examples that tell you how to get a development env running.

```
composer require antare74/response-formatter
```

## 🎈 Usage <a name="usage"></a>

Example Usage.
```
<?php

use Illuminate\Support\Facades\Route;
use Antare74\ResponseFormatter\Format;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/success', function () {
    return Format::success([
        'name' => 'Antare74',
        'age' => '74',
        'address' => 'Jakarta',
    ], 'Success Message');
});

Route::get('/error', function () {
    return Format::error([
        'my_error_data' => 'Error Message',
    ], 'Error Message', 500);
});

```
Example Success Response.
```
{
  "meta": {
    "code": 200,
    "status": "success",
    "message": "Success Message",
    "is_paginated": false
  },
  "pagination": [
    
  ],
  "data": {
    "name": "Antare74",
    "age": "74",
    "address": "Jakarta"
  }
}
```

Example Error Response.
```
{
  "meta": {
    "code": 500,
    "status": "error",
    "message": "Error Message",
    "is_paginated": false
  },
  "data": {
    "my_error_data": "Error Message"
  }
}
```
## ✍️ Authors <a name = "authors"></a>

- [@antare74](https://github.com/antare74) - IDK

See also the list of [contributors](https://github.com/antare74) who participated in this project.

## 🎉 Acknowledgements <a name = "acknowledgement"></a>
- Find on Packagist: https://packagist.org/packages/antare74/response-formatter
- References format: https://github.com/belajarkoding/laravel-response-formatter/blob/master/ResponseFormatter.php
