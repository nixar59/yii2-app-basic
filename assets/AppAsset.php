<?php


namespace app\assets;


use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle
{
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
    ];
}