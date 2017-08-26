# Yii2 Slick asset
[![Latest Stable Version](https://poser.pugx.org/kl83/yii2-slick-asset/v/stable)](https://packagist.org/packages/kl83/yii2-slick-asset)
[![Total Downloads](https://poser.pugx.org/kl83/yii2-slick-asset/downloads)](https://packagist.org/packages/kl83/yii2-slick-asset)
[![License](https://poser.pugx.org/kl83/yii2-slick-asset/license)](https://packagist.org/packages/kl83/yii2-slick-asset)

Slick is the last carousel you'll ever need. Project home page http://kenwheeler.github.io/slick/.

## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run
~~~
php composer.phar require kl83/yii2-slick-asset ~1.0.0
~~~
or add
~~~
"kl83/yii2-slick-asset": "~1.0.0"
~~~
to the require section of your composer.json file.

## Usage

### Adding an asset as a dependence on another asset.
~~~ php
class SomeAsset extends \yii\web\AssetBundle
{
...
  public $depends = [
    'kl83\assets\SlickAsset',
  ];
...
}
~~~

### Adding an asset within a view.
~~~ php
kl83\assets\SlickAsset::register($this);
~~~

## License
MIT License
