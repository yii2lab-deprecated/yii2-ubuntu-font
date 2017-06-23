<?php
/**
 * Created by PhpStorm.
 * User: zein
 * Date: 8/2/14
 * Time: 11:40 AM
 */

namespace yii2lab\ubuntu_font\assets;

use yii\web\AssetBundle;

class UbuntuAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/ubuntu_font/dist';
	public $css = [
		'styles.css',
	];
	private $addonCss = '';
	
	function init() {
		parent::init();
	}
	
}
