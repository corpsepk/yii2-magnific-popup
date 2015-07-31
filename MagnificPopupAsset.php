<?php

namespace corpsepk\magnificPopup;

class MagnificPopupAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/roman444uk/yii2-magnific-popup/assets';
    
    public $js = [
        'js/jquery.magnific-popup.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    
    public $css = [
        'css/magnific-popup.css'
    ];
}