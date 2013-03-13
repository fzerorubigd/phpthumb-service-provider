# PHPThumbServiceProvider

A PHPThumb ServiceProvider for [Silex](http://silex.sensiolabs.org) base on [PHPThumb](http://phpthumb.gxdlabs.com/)

## Usage

### Getting the thumb generator object

```php
$app->register(new fzerorubigd\Silex\PHPThumbServiceProvider());
```

```php
$provider = $app['phpthumb'];

$thumb = $provider($fileName);
$thumb->rotateImage('CW'); // See PHPThumb documents
$thumb->show();
