<?php
namespace diplodok\Gallerywidget;

use yii\web\AssetBundle;
use yii\web\View;

class DiplodokAsset extends AssetBundle {
    public static $theme;
    
    public $js = [
	'js/jquery-11.0.min.js',
	'js/unitegallery.js'
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
        $this->js[] = 'themes/'.self::$theme.'/ug-theme-'.self::$theme.'.js';
        if(self::$theme == 'default') {
            $this->css[] = 'themes/'.self::$theme.'/ug-theme-'.self::$theme.'.css';
        }
    }
}
