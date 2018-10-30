<?php

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $css = [
        'css/main.css',
        'css/typography.css',
        'css/forms.css',
        'css/button.css',
        'css/portfolio.css',
        'libs/base/css/flexboxgrid.css',
        'libs/base/css/normalize.css',
    ];
    public $baseUrl = '@web';
    public $js = [
        'libs/base/js/jquery-3.3.1.min.js',
        'js/menu.js',
        'libs/vanilla-tilt.min.js',
        'libs/slick-slider/js/slick.min.js',
        'js/checkbox.js',
        'js/slick-init.js',
        'libs/textarea-autosize.min.js',
        'js/textarea-autosize.init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}