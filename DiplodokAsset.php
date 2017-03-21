<?php
namespace diplodok\Gallerywidget;

use yii\web\AssetBundle;
use yii\web\View;

class DiplodokAsset extends AssetBundle {
    public $js = [
	'js/jquery-11.0.min.js',
	'js/unitegallery.js',
	//'themes/tiles/ug-theme-tiles.js'
    ];
    public $jsOptions = ['position' => View::POS_END];
    public $css = [
        'css/unite-gallery.css'
    ];
    public $depends = [
        //'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = '@vendor/diplodok/yii2-unitegallery-widget/unitegallery/';
        parent::init();
    }
}
