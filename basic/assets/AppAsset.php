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
        'theme_vendors/bootstrap/dist/css/bootstrap.min.css',
        'theme_vendors/font-awesome/css/font-awesome.min.css',
        'theme_vendors/nprogress/nprogress.css',
        'theme_vendors/iCheck/skins/flat/green.css',
        'theme_vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css',
        'theme_vendors/jqvmap/dist/jqvmap.min.css',
        'build/css/custom.min.css',

    ];
    public $js = [
    "theme_vendors/jquery/dist/jquery.min.js",
     "theme_vendors/bootstrap/dist/js/bootstrap.min.js",
     "theme_vendors/fastclick/lib/fastclick.js",
     "theme_vendors/nprogress/nprogress.js",
     "theme_vendors/Chart.js/dist/Chart.min.js",
     "theme_vendors/gauge.js/dist/gauge.min.js",
     "theme_vendors/bootstrap-progressbar/bootstrap-progressbar.min.js",
     "theme_vendors/iCheck/icheck.min.js",
     "theme_vendors/skycons/skycons.js",
     "theme_vendors/Flot/jquery.flot.js",
     "theme_vendors/Flot/jquery.flot.pie.js",
     "theme_vendors/Flot/jquery.flot.time.js",
     "theme_vendors/Flot/jquery.flot.stack.js",
     "theme_vendors/Flot/jquery.flot.resize.js",
     "theme_vendors/flot.orderbars/js/jquery.flot.orderBars.js",
     "theme_vendors/flot-spline/js/jquery.flot.spline.min.js",
     "theme_vendors/flot.curvedlines/curvedLines.js",
     "theme_vendors/DateJS/build/date.js",
     "theme_vendors/jqvmap/dist/jquery.vmap.js",
     "theme_vendors/jqvmap/dist/maps/jquery.vmap.world.js",
     "theme_vendors/jqvmap/examples/js/jquery.vmap.sampledata.js",
     "theme_vendors/moment/min/moment.min.js",
     "theme_vendors/bootstrap-daterangepicker/daterangepicker.js",
     "theme_vendors/validator/validator.js",
     "build/js/custom.min.js",
    ];
    // public $jsOptions = array(
    //     'position' => \yii\web\View::POS_HEAD
    // );
    public $depends = [
          // 'yii\web\YiiAsset',
          // 'yii\bootstrap\BootstrapAsset',
      ];

}
