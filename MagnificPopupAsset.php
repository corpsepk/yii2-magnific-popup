<?php

namespace corpsepk\magnificPopup;

class MagnificPopupAsset extends \yii\web\AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/corpsepk/yii2-magnific-popup/assets';

    /**
     * @var array
     */
    public $js = [
        'js/jquery.magnific-popup.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/magnific-popup.css'
    ];
}