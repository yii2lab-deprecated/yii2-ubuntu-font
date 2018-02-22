<?php

namespace yii2lab\ubuntu_font\assets;

use yii\web\AssetBundle;
use yii2lab\helpers\Helper;

class UbuntuAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/ubuntu_font/dist';
	public $css = [
		'styles.css',
	];

	public function init()
    {
        parent::init();
        Helper::setFont('ubuntu');
    }
}
