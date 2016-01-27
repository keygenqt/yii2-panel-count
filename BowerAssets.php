<?php

namespace keygenqt\panelCount;

use \yii\web\AssetBundle;

/**
 * @author KeyGen <keygenqt@gmail.com>
 */
class BowerAssets extends AssetBundle
{
	public $sourcePath = '@bower/font-awesome';

	public $css = [
        'css/font-awesome.min.css',
	];
}
