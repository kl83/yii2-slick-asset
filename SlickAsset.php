<?php
namespace kl83\slickasset;

class SlickAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/slick-carousel/slick';
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $css = [
        'slick.css',
        'slick-theme.css',
    ];
    public function init()
    {
        $this->js = [
            'slick'.( YII_DEBUG ? '' : '.min' ).'.js',
        ];
    }
}
