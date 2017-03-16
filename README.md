Виджет галереи Unite Gallery
============================
Простейший виджет на основе галереи Unite Gallery

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist diplodok/yii2-unitegallery-widget "~1.0.0"
```

or add

```
"diplodok/yii2-unitegallery-widget": "~1.0.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \diplodok\Gallerywidget\AutoloadExample::widget([
        'title_gallery' => 'Заголовок', // опция
        'photos' => [
			['src' => '/images/1.jpg', 'alt' => '', 'description' => 'опция'],
			['src' => '/images/2.jpg', 'alt' => '', 'description' => 'опция'],
			['src' => '/images/3.jpg', 'alt' => '', 'description' => 'опция']
		]); ?>```