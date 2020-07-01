<?php
namespace mhunesi\select2;

class Select2Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/select2/dist';

    public $css = [
        'css/select2.min.css',
    ];

    public $js = [
        'js/select2.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
