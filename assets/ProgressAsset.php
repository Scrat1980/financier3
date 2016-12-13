<?php

namespace app\assets;

class ProgressAsset extends AppAsset
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery-ui.css',
//        'styles/demontaj.css',
    ];
    public $js = [
        'js/jquery-3.1.1.min.js',
        'js/jquery-ui.js',
    ];

    public $depends = [
//        'app\assets\SiteAsset',
//        'yii\web\YiiAsset',
    ];
}
