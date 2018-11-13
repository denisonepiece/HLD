<?php

namespace app\assets;

use yii\web\AssetBundle;


class ViewCaseAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/typography.css',
        'css/button.css',
        'libs/plyr/plyr.css',
        'css/portfolio.css',
        'css/blocks.css',
        'libs/base/css/flexboxgrid.css',
        'libs/base/css/normalize.css',
    ];
    public $js = [
        'libs/base/js/jquery-3.3.1.min.js',
        'js/menu.js',
        'libs/vanilla-tilt.min.js',
        'libs/smooth-scroll.min.js',
        'libs/plyr/plyr.js',
        'js/plyr-change.js',
        'js/more.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}