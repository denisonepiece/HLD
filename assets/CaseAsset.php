<?php

namespace app\assets;

use yii\web\AssetBundle;


class CaseAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/typography.css',
        'css/button.css',
        'css/portfolio.css',
        'css/blocks.css',
        'libs/base/css/flexboxgrid.css',
        'libs/base/css/normalize.css',
    ];
    public $js = [
        'libs/base/js/jquery-3.3.1.min.js',
        'js/menu.js',
        'libs/smooth-scroll.min.js',
        'js/case.js',
        'js/more.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}