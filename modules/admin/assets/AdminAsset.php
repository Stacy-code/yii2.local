<?php


namespace app\modules\admin\assets;


use yii\web\JqueryAsset;

class AdminAsset extends BaseAssetBundle
{
    /**
     * @var string $sourcePath
     * Папка со стилями и скриптами
     */
    public $sourcePath = '@webroot/themes/backend';
    /**
     * @var array
     * Підключаємо стилі
     */
    public $css = [
        'css/app.min.css', 'css/icons.min.css', 'css/bootstrap.min.css',
      //  'libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
      //  'libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
      //  'libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css',
        'images/favicon.ico'
    ];

    /**
     * @var array
     * Підключаємо скріпти
     */
    public $js = [
        'js/pages/dashboard.init.js',
        'js/app.js',
        //'libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
      //  'libs/datatables.net-responsive/js/dataTables.responsive.min.js',
      //  'libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
     //   'libs/datatables.net/js/jquery.dataTables.min.js',
       // 'libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js',
    //    'libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js',
    //    'libs/apexcharts/apexcharts.min.js',
      //  'libs/node-waves/waves.min.js',
     //   'libs/simplebar/simplebar.min.js',
      //  'libs/metismenu/metisMenu.min.js',
   //     'libs/bootstrap/js/bootstrap.bundle.min.js',
   //     'libs/jquery/jquery.min.js'
    ];

    /**
     * @var string[]
     * Залежності і jquery
     */
    public $depends = [
        JqueryAsset::class
    ];


}
