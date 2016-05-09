<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'slid/css/bootstrap.min.css',
        'slid/css/full-slider.css',
    ];
    public $js = [
        'js/extra.js',
        'js/jquery.form.js',
        'js/jquery.MetaData.js',
        'js/jquery.MultiFile.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
