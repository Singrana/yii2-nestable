<?php
namespace app\widgets\Nestable;
use yii\web\AssetBundle;

class NestableBundle extends AssetBundle
{
	public $js =
	[
		'jquery.nestable.js',
	];
	public $depends =
	[
		'yii\web\YiiAsset',
	];

	public function init()
	{
		$this->sourcePath=__DIR__.'/assets';

		parent::init();
	}
}