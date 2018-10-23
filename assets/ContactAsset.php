<?php

namespace app\assets;

use yii\web\AssetBundle;


class ContactAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/index.css',
        'css/typography.css',
        'css/button.css',
        'css/portfolio.css',
        'css/blocks.css',
        'libs/slick-slider/css/slick-theme.min.css',
        'libs/slick-slider/css/slick.min.css',
        'css/slick-custom.css',
        'libs/base/css/flexboxgrid.css',
        'libs/base/css/normalize.css',
    ];
    public $js = [
        'libs/base/js/jquery-3.3.1.min.js',
        'js/menu.js',
        'libs/vanilla-tilt.min.js',
        'libs/slick-slider/js/slick.min.js',
        'js/slick-init.js',
        'libs/smooth-scroll.min.js',
        'libs/rellax.min.js',
        'js/rellax-init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}