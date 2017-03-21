<?php
namespace diplodok\Gallerywidget;

use yii\base\Widget;

/**
 * Description of GalleryWidget
 *
 * @author Alexandr Kuznetsov
 */
class GalleryWidget extends Widget {
    
    /*
     * массив фотографий
     * $photos = [
     * ['src'=>'...1', 'alt' => '', 'description' => 'опционально'],
     * ['src'=>'...1', 'alt' => '', 'description' => 'опционально'],
     * ...
     * ]
     */
    public $photos;
    
    public $theme = 'grid'; // тема галереи

    public $title_gallery = ''; // заголовок галереи (опционально)


    public function init() {
        parent::init();
    }
    
    public function run() {
        if(is_array($this->photos) && count($this->photos) > 0) {
            return $this->render('gallery', [
                'id_gallery' => 'gallery_'.md5(uniqid().microtime(). rand(0, time())),
                'theme' => $this->theme,
                'title_gallery' => $this->title_gallery,
                'photos' => $this->photos
            ]);
        } else {
            return '';
        }
    }
}
