# yii2-magnific-popup 
===============
jQuery plugin page http://dimsemenov.com/plugins/magnific-popup/

## Installation
Update composer.json add to "require" section
```
"corpsepk/yii2-magnific-popup" : "^0.1"
```

Update composer.json add to "repositories" section
```json
{
    "type": "git",
    "url": "https://github.com/corpsepk/yii2-magnific-popup.git"
}
```

## How to use
More settings look at Magnific popup documentation http://dimsemenov.com/plugins/magnific-popup/documentation.html
```php
use corpsepk\magnificPopup\MagnificPopup;

MagnificPopup::widget([
    'target' => '.media-widget .photo-grid a',
    'options' => [
        'type' => 'ajax',
        'closeOnBgClick' => true,
        'closeBtnInside' => true,
        'overflowY' => 'scroll',
        'disableOn' => 600,
        'tLoading' => 'Загрузка...',
        'gallery' => [
            'enabled' => true,
            'navigateByImgClick' => true,
            'preload' => ['[0,1]'],
            'tCounter' => '<span class="mfp-counter">%curr% из %total%</span>',
        ],
        'ajax' => [
            'settings' => ['type' => 'POST'],
        ],
    ]
]);
```
