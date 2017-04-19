<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

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
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/flexslider.css',
        'css/dropdowns-enhancement.css',
        'css/site.css',
        'css/my-style.css',
        'css/responsive.css',

    ];
    public $js = [

        'js/jquery.sticky.js',
        'js/jquery.flexslider-min.js',
        'js/jquery.cookie.js',
        'js/jquery.accordion.js',
        'admin-lte/js/AdminLTE/app.js',
        'js/dropdowns-enhancement.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
