<?php

namespace yii2lab\ubuntu_font\assets;

use Yii;
use yii\web\AssetBundle;

class UbuntuAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/ubuntu_font/dist';
	public $css = [
		'styles.css',
	];
	
	function init() {
		parent::init();
		$css = '
            html,
            body {
                font-family: ubuntu;
            }
        ';
        Yii::$app->view->registerCss($css);
	}
	
}
