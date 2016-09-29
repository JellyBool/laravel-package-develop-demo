
[![Build Status](https://travis-ci.org/JellyBool/laravel-package-develop-demo.svg?branch=master)](https://travis-ci.org/JellyBool/laravel-package-develop-demo)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/JellyBool/laravel-package-develop-demo/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/JellyBool/laravel-package-develop-demo/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/JellyBool/laravel-package-develop-demo/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/JellyBool/laravel-package-develop-demo/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/JellyBool/laravel-package-develop-demo/badges/build.png?b=master)](https://scrutinizer-ci.com/g/JellyBool/laravel-package-develop-demo/build-status/master)

### 开发 Laravel 扩展教程

### 用法

```
composer require laravist/hasher
```

或者在你的 `composer.json` 的 require 部分中添加:
```json
 "laravist/hasher": "~1.0"
```

下载完毕之后,直接配置 `app/config.php` 的 `providers`:

```php
//Illuminate\Hashing\HashServiceProvider::class,
\Laravist\Hasher\MD5HasherProvider::class,
```
