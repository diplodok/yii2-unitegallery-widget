<?php
namespace diplodok\Gallerywidget;

use yii\web\AssetBundle;
use yii\web\View;
use yii\helpers\ArrayHelper;

class DiplodokAsset extends AssetBundle {
    
    public $js = [
	'js/jquery-11.0.min.js',
	'js/unitegallery.min.js',
    ];
    public $jsOptions = ['position' => View::POS_END];
    public $css = [
        'css/unite-gallery.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        $this->sourcePath = '@vendor/diplodok/yii2-unitegallery-widget/unitegallery/';
        parent::init();
    }

    public static function registerBundleWithTheme($view, $theme) {
        $bundle = ArrayHelper::getValue($view->assetBundles, static::className(), static::register($view));
		
        $bundle->js[] = 'themes/'.$theme.'/ug-theme-'.$theme.'.js';
		
        if($theme == 'default') {
            $bundle->css[] = 'themes/'.$theme.'/ug-theme-'.$theme.'.css';
        }
    }	
}
