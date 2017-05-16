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
class AppThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/css/bootstrap.min.css',
        'theme/font-awesome/css/font-awesome.css',
        'theme/css/animate.css',
        'theme/css/style.css'
    ];
    public $js = [
      'theme/js/jquery-2.1.1.js',
      'theme/js/bootstrap.min.js',
      'theme/js/plugins/metisMenu/jquery.metisMenu.js',
      'theme/js/plugins/slimscroll/jquery.slimscroll.min.js',

      'theme/js/plugins/flot/jquery.flot.js',
      'theme/js/plugins/flot/jquery.flot.tooltip.min.js',
      'theme/js/plugins/flot/jquery.flot.spline.js',
      'theme/js/plugins/flot/jquery.flot.resize.js',
      'theme/js/plugins/flot/jquery.flot.pie.js',
      'theme/js/plugins/flot/jquery.flot.symbol.js',
      'theme/js/plugins/flot/jquery.flot.time.js',

      'theme/js/plugins/peity/jquery.peity.min.js',
      'theme/js/demo/peity-demo.js',

      'theme/js/inspinia.js',
      'theme/js/plugins/pace/pace.min.js',

      'theme/js/plugins/jquery-ui/jquery-ui.min.js',

      'theme/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
      'theme/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',

      'theme/js/plugins/easypiechart/jquery.easypiechart.js',

      'theme/js/plugins/sparkline/jquery.sparkline.min.js',
  
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
