### 开发 Laravel 扩展教程

### 用法

```
omposer require composer require laravist/hasher
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
