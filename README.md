Виджет галереи Unite Gallery
============================
Простейший виджет на основе галереи Unite Gallery

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist diplodok/yii2-unitegallery-widget "dev-master"
```

or add

```
"diplodok/yii2-unitegallery-widget": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \diplodok\Gallerywidget\GalleryWidget::widget([
        'title_gallery' => 'Заголовок', // опция
        'theme' => 'grid', // опция (по умолчанию тема grid)
        'photos' => [
			['src' => '/images/1.jpg', 'alt' => '', 'description' => 'опция'],
			['src' => '/images/2.jpg', 'alt' => '', 'description' => 'опция'],
			['src' => '/images/3.jpg', 'alt' => '', 'description' => 'опция']
		]); ?>
```
Темы: grid, tiles, tilesgrid, slider, default, compact, carousel