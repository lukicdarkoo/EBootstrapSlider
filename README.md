Yii extension based on bootstrap-slider.js
==========================================

REQUIREMENTS
------------

Tested on Yii 1.1.13


INSTALATION
-----------

Copy all files to /protected/extensions/EBootstrapSlider/


USAGE
-----

	$this->widget('ext.EBootstrapSlider.EBootstrapSlider', array(
		'touchSupport' => true, //if true modernizr.js will be added

		'min' => 0,
		'max' => 100,
		'step' => 1,
		'value' => 50,
		'orientation' = 'horizontal',
		'tooltip' => 'show',

		//events
		'slideStop' => 'alert(object.value)',
		'slideStart' => 'alert(object.value)',
		'slide' => '',
	));