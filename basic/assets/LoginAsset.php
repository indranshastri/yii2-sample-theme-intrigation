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
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      "theme_vendors/bootstrap/dist/css/bootstrap.min.css",
      "theme_vendors/font-awesome/css/font-awesome.min.css",
      "theme_vendors/nprogress/nprogress.css",
      "theme_vendors/animate.css/animate.min.css",
      "build/css/custom.min.css",
    ];
    public $js = [
    ];
    // public $jsOptions = array(
    //     'position' => \yii\web\View::POS_HEAD
    // );
    public $depends = [
          // 'yii\web\YiiAsset',
          // 'yii\bootstrap\BootstrapAsset',
      ];

}
