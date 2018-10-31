<?php

namespace app\assets;

use yii\web\AssetBundle;


class BrifAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/typography.css',
        'css/blocks.css',
        'css/contacts.css',
        'css/button.css',
        'css/forms.css',
        'css/modal.css',
        'libs/base/css/flexboxgrid.css',
        'libs/base/css/normalize.css',
    ];
    public $js = [
        'libs/base/js/jquery-3.3.1.min.js',
        'js/menu.js',
        'libs/smooth-scroll.min.js',
        'js/checkbox.js',
        'js/modal.js',
        'libs/textarea-autosize.min.js',
        'js/textarea-autosize.init.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}