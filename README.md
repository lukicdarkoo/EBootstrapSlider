Yii extension based on bootstrap-slider.js
==========================================

Extension for Yii based on slider from http://www.eyecon.ro/bootstrap-slider/

REQUIREMENTS
------------

Yii 1.1.13 (tested), Bootstrap v2.3.1 (tested)


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