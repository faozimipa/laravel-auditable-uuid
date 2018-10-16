## This is Auditable Laravel with Uiid Package


## Install via Composer

```bash
composer require zitech/laravel-auditable-uuid
```


## Usage
```php
Schema::create('users', function (Blueprint $table) {
    $table->uuid('id');
    $table->string('name', 100);
    $table->auditable();
	$table->primary('id');
    $table->timestamps();	
});
```
drop migrations

```php
Schema::create('users', function (Blueprint $table) {
    $table->dropAuditable();
});
```

 on User model

``` php
namespace App;

use Zitech\LaravelAuditableUuid\AuditableTrait;

class User extends Model
{
    use AuditableTrait;
	...................
}
```


*** Note ***
### this is just test package
