Виджет галереи Unite Gallery
============================
Простейший виджет на основе галереи Unite Gallery

[![Latest Stable Version](https://poser.pugx.org/diplodok/yii2-unitegallery-widget/v/stable.svg)](https://packagist.org/packages/diplodok/yii2-unitegallery-widget)[![Total Downloads](https://poser.pugx.org/diplodok/yii2-unitegallery-widget/downloads.svg)](https://packagist.org/packages/diplodok/yii2-unitegallery-widget)[![Latest Unstable Version](https://poser.pugx.org/diplodok/yii2-unitegallery-widget/v/unstable.svg)](https://packagist.org/packages/diplodok/yii2-unitegallery-widget)[![License](https://poser.pugx.org/diplodok/yii2-unitegallery-widget/license.svg)](https://packagist.org/packages/diplodok/yii2-unitegallery-widget)

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