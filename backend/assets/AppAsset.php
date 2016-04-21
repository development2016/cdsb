<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'carousel/css/jquery.carousel.fullscreen.css',
        'carousel/js/bootstrap/css/bootstrap.min.css',

    ];
    public $js = [
        'js/extra.js',
        'js/jquery.form.js',
        'js/jquery.MetaData.js',
        'js/jquery.MultiFile.js',
        'carousel/js/bootstrap/js/bootstrap.min.js',
        'carousel/js/jquery.carousel.fullscreen.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
