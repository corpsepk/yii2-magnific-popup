# yii2-magnific-popup 
===============
jQuery plugin page http://dimsemenov.com/plugins/magnific-popup/

## Installation
Update composer.json add to "require" section
```
"corpsepk/yii2-magnific-popup" : "@dev"
```

Update composer.json add to "repositories" section
```json
{
    "type": "git",
    "url": "https://github.com/corpsepk/yii2-magnific-popup.git"
}
```

## How to use
```php
use corpsepk\magnificPopup\MagnificPopup;

MagnificPopup::widget([
    'target' => '.magnific-popup',
    'options' => [...]
]);
```
