<?php
use yii\web\View;
use yii\web\Event;
use diplodok\Gallerywidget\DiplodokAsset;

DiplodokAsset::registerBundleWithTheme($this, $theme);

$script = <<< JS
    $("#$id_gallery").unitegallery({
        tiles_col_width: 120, 
        tiles_enable_transition: false, 
        gallery_theme: "$theme",
        tiles_justified_row_height: 120,
        theme_preloading_height: 120,
        gallery_min_width: 120,
    });
JS;

$this->registerJs($script , View::POS_READY);
?>
<?php
if($title_gallery) {
    ?><div><b><?=$title_gallery?></b></div><?php
}
?>
<div id="<?= $id_gallery ?>" class="panel">
        <?php
        foreach ($photos as $Image) {
            if(substr($Image['src'], -3 ) == 'mp4') {
                $thumb = '/image/video.png';
                $img = "<img src='".$thumb."' data-image='".$thumb."' ";
                $img .= 'data-type="html5video" ';
                $img .= "data-videomp4='".$Image['src']."' ";
            } else {
                $thumb = isset($Image['thumb']) ? $Image['thumb'] : $Image['src'];
                $img = "<img src='".$thumb."' data-image='".$Image['src']."' ";
            }
            if (isset($Image['alt'])) {
                $img .= "alt='".$Image['alt']."' ";
            }
            if (isset($Image['description'])) {
                $img .= "data-description='".$Image['description']."' ";
            }
            echo "$img/>";
        }
        ?>
</div>
